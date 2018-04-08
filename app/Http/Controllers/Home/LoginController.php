<?php

namespace App\Http\Controllers\Home;

use App\Model\Details;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    
    /*
     * 显示登录页面
     * */
    public function login()
    {
        return view('home.login');
    }
    
    /*
     * 执行登录方法
     * */
    public function dologin(Request $request)
    {


        //1.获取登录数据
        $input = $request->except('_token');

        //2.验证
        $validator = Validator::make($input, [
            'geetest_challenge' => 'required|geetest',
            'username'=>'required|between:4,10|alpha_num',
            'password'=>'required|between:4,10'
        ], [
            'geetest' => config('laravel-geetest.server_fail_alert'),
            'username.required'=>'用户名不能为空',
            'username.between'=>'用户名必须在4-10位之间',
            'username.alpha_num'=>'用户名只能由字母数字组合',
            'password.required'=>'密码不能为空',
            'password.between'=>'密码必须6到12位'
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator) 
                ->withInput();
        }

        //3.判断是否有此用户
        $user = User::where('username',$input['username'])->first();

        if(!$user){
            return redirect('/login')->with('errors','用户不存在');
        }

        // 判断是否有权限
         $status = $user->status;
            if ($status == 0){
                return redirect('/login')->with('errors','用户名被禁');
            }

        //4.判断密码是否正确（加密方式）
        if($input['password'] != decrypt($user->password)) {
            return redirect('/login')->with('errors','密码错误');
        }

         

        //5. 保存用户信息到session中（session的操作）
        Session::put('user',$user);


        //6. 如果都正确，跳转到前台首页（路由跳转）
        return redirect('/');

    }

    /*
     * 显示注册页面
     * */
    public function register()
    {
        //
        return view('home.register');
    }

    /*
     * 执行注册方法
     * */
    public function store(Request $request)
    {
        //1.获取登录数据
        $repwd = $request['repassword'];
        $input = $request->except(['_token','repassword']);

        //2.验证
        $validator = Validator::make($input, [
            'geetest_challenge' => 'required|geetest',
            'username'=>'required|between:4,10|alpha_num',
            'password'=>'required|between:4,10',
            'email'=>'required|email'
        ], [
            'geetest' => config('laravel-geetest.server_fail_alert'),
            'username.required'=>'用户名不能为空',
            'username.between'=>'用户名必须在4-10位之间',
            'username.alpha_num'=>'用户名只能由字母数字组合',
            'password.required'=>'密码不能为空',
            'password.between'=>'密码必须6到12位',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确'

        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        //3.判断是否有此用户
        $user = User::where('username',$input['username'])->first();

        if($user){
            return redirect('/register')->with('errors','用户名已存在');
        }

        //4.判断密码
        if($input['password'] != $repwd ) {
            return redirect('/register')->with('errors','两次密码不一致');
        }

        //5.判断邮箱是否被使用
        $user = User::where('email',$input['email'])->first();

        if($user){
            return redirect('/register')->with('errors','邮箱已存在');
        }

        //6.信息保存到数据库
        $input['status'] = '1';
        $input['password'] = encrypt($input['password']);
        $res = User::create($input);

        if ($res){

            //添加数据到关联表
            Details::create(['uid'=>$res->id,'nickname'=>$res->username]);

            //7.注册成功，信息存入session，跳转到首页
            Session::put('user',$res);
            return redirect('/');
        }else{
            return redirect('/register')->with('errors','注册用户失败');
        }

    }

    public function outlogin()
    {
        Session::forget('user');
        Session::forget('userInfo');
        return redirect('/');
    }


}










