<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin_User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Model\Home_User;

use DB;

class UserController extends Controller
{
    //返回添加页面
    public function add(){
        return view('admin.user.add');
    }

    // 保存数据页面
    public function store(Request $request){
        // 1.接受用户传递过来的信息
        $res = $request->all();
        // return $res;

        $pan = Admin_User::where('username',$res['username'])->first();
        if (!empty($pan)){
            return redirect('/user/add')->with('msg','用户名已存在');
        }


        if ($res['password'] !== $res['repass']) {

            return redirect('/user/add')->with('msg','两次密码不正确');
        }

        // 加密
        $password = encrypt($res['password']);

        // 入库
        $ress = Admin_User::create(['username'=>$res['username'],'password'=>$password,'auth'=>$res['auth'],'status'=>$res['status']]);

        // 4.根据添加执行结果,执行跳转(成功,列表页,失败添加页)
        if($ress){
            // 添加成功跳转到列表页
            return redirect('/user/list');
        } else {
            return back()->with('msg','添加失败');
        }
//
    }







    // 后台用户列表页
    public function list(Request $request){

//      分页并且单条件搜索搜索条件
        $username = $request->input('username');
        $user = Admin_User::where('username','like','%'.$username.'%')->paginate(5);

        return view('Admin.user.list',['user'=>$user,'request'=>$request]);

    }
    // 前台用户列表页
    public function qlist(Request $request){

        $username = $request->input('username');
        $quser = Home_User::where('username','like','%'.$username.'%')->paginate(5);
        return view('Admin.user.qlist',['quser'=>$quser,'request'=>$request]);


    }



    public function jinyong($id)
    {

        // dd($id);
        $ress = DB::table('home_user')->where('id',$id)->update(['status' => '0']);


        if($ress){
            // 修改成功,跳转到列表页

            return redirect('/quser/list');
        } else {
//            back回到原地
            return back()->with('msg','修改失败');
        }





    }

    public function kaitong($id)
    {

        // dd($id);
        $ress = DB::table('home_user')->where('id',$id)->update(['status' => '1']);


        if($ress){
            // 修改成功,跳转到列表页

            return redirect('/quser/list');
        } else {
//            back回到原地
            return back()->with('msg','修改失败');
        }





    }




    // 修改
    public function edit($id){
        // 获取id
        $user = Admin_User::find($id);
//        $user->password = decrypt($user->password);
        // dd( $user['password']);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {

        // 1.根据id获取要修改的用户
        $user = Admin_User::find($id);

        if($user->auth == 1){
            $user->password = decrypt($user->password);
            $res = $request->except('_token');
            if($res['repass'] != $user->password)
            {
                return redirect('/admin/edit')->with('msg','原密码不正确');
            }
            $mi = encrypt($res['password']);
            $user->password = $mi;
            $user->auth = $res['auth'];
            $user->status = $res['status'];

            $ress = $user->save();
            if($ress){
                // 修改成功,跳转到列表页

                return redirect('/user/list');
            } else {
//            back回到原地
                return back()->with('msg','修改失败');
            }die;
        } else {

            // 2.获取要修改的值,更新user模型

            $user->password = decrypt($user->password);
            $res = $request->except('_token');
            if($res['repass'] != $user->password)
            {
                return redirect('/admin/recipe')->with('msg','原密码不正确');
            }
            $mi = encrypt($res['password']);
            $user->password = $mi;
            $ress = $user->save();
            if($ress)
            {
                return redirect('/admin/recipe')->with('msg','修改成功');
            }

        }




    }

    public function delete($id)
    {
        // 获取id

        $user = Admin_User::findOrFail($id);

        $ress = $user->delete();

        if($ress){
            // 删除成功
            return redirect('/user/list')->with('msg','删除成功');
        } else {
            return redirect('/user/list')->with('msg','删除失败');
        }

    }



}