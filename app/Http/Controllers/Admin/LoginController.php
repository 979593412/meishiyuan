<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require_once app_path().'\Org\code\code.class.php';
use App\Org\code\code;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Session;
//use Gregwar\Captcha\CaptchaBuilder;
//use Gregwar\Captcha\PhraseBuilder;

class LoginController extends Controller
{
    //显示登录页面
    public function login()
    {
        return view('Admin.admin.login');
    }

    //生成验证码
    public function code()
    {
        $code=new Code;
        return $code->make();
    }

    //     第三方验证码生成  gregwar/captcha 插件
//    public function captcha($tmp)
//    {
//        $phrase = new PhraseBuilder;
//        // 设置验证码位数
//        $code = $phrase->build(6);
//        // 生成验证码图片的Builder对象，配置相应属性
//        $builder = new CaptchaBuilder($code, $phrase);
//        // 设置背景颜色
//        $builder->setBackgroundColor(220, 210, 230);
//        $builder->setMaxAngle(25);
//        $builder->setMaxBehindLines(0);
//        $builder->setMaxFrontLines(0);
//        // 可以设置图片宽高及字体
//        $builder->build($width = 100, $height = 40, $font = null);
//        // 获取验证码的内容
//        $phrase = $builder->getPhrase();
//        // 把内容存入session
//        \Session::flash('code', $phrase);
//        // 生成图片
//        header("Cache-Control: no-cache, must-revalidate");
//        header("Content-Type:image/jpeg");
//        $builder->output();
//    }


        public function dologin(Request $request)
        {
//            1.获取用户提交过来的信息
            $input=$request->except('_token');
//            dd($all);

//            2.对提交的数据进行验证（Validator）
//            $validator=$validator::make(需要验证的数据，验证规则，提示信息);

            //规则验证
            $rule=[
                'username'=>'required|between:4,18',
                'password'=>'required|between:4,18',
            ];
            $msg = [
                'username.required'=>'用户名不能为空',
                'username.between'=>'用户名必须在4-18位之间',
                'password.required'=>'密码不能为空',
                'password.between'=>'密码必须在4-18位之间',
            ];
//        如果要求密码 必须输入、长度在6-18位之间、11位的电话号码
//        'username'=>'required|between:6,18',
//        'username'=>array('regex:/^13\d{9}$|^14\d{9}$|^15\d{9}$|^17\d{9}$|^18\d{9}$/i'),
//        'username'=>email,

            $validator=validator::make($input,$rule,$msg);
//            如果验证失败
            if ($validator->fails()) {
                return redirect('admin/logins')
                    ->withErrors($validator)
                    ->withInput();
            }

            //3.判断验证码是否正确
            if(strtolower($input['code'])!= strtolower(session()->get('code')))
            {
                return redirect('/admin/logins')->with('errors','验证按不正确');
            }
//            else if (empty(strtolower($input['code']))){
//                return redirect('/admin/login')->with('errors','验证码不能为空');
//            }


            //4. 判断是否有此用户
            $user=admin_user::where('username',$input['username'])->first();
            if(!$user){
                return redirect('admin/logins')->with('errors','用户名不存在');
            }
            //5. 判断密码否正确

            if($input['password'] != Crypt::decrypt($user->password)) {
                return redirect('admin/logins')->with('errors','密码错误');
            }

//            7. 保存用户信息到session中（session的操作）

//          session()->put('username',$user->username);
//         session()->put('userid',$user->userid);
            //
             Session::put('user',$user);

//          session()->get('user')->username;
//            6. 如果都正确，跳转到后台首页（路由跳转）
              return redirect('admin/user/list');

        }

}
