<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

use DB;

class UserController extends Controller
{
    //返回添加页面
    public function add(){
        return view('admin.user.add');
    }

    // 保存数据页面
    public function store(Request $request){
//         1.接受用户传递过来的信息
        $res = $request->all();
//        dd($res);
        // 第二种方法 批量赋值

        $ress = User::create(['username'=>$res['username'],'password'=>$res['password'],'auth'=>$res['auth'],'status'=>$res['status']]);



//        dd($ress);
        // 4.根据添加执行结果,执行跳转(成功,列表页,失败添加页)
        if($ress){
            // 添加成功跳转到列表页
            return redirect('admin/user/list');
        } else {
            return back()->with('msg','添加失败');
        }
//
    }


    //列表页
    public function list(Request $request){

//      分页并且单条件搜索搜索条件
        $username = $request->input('username');
        $user = User::where('username','like','%'.$username.'%')->paginate(5);
        return view('admin.user.list',compact('user','username'));

    }

    // 修改
    public function edit($id){
        // 获取id
        $user = User::find($id);

        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {

        // 1.根据id获取要修改的用户
        $user = User::find($id);
        // 2.获取要修改的值,更新user模型
        $res = $request->all();
        $user->username = $res['username'];
        $user->password = $res['password'];
        $user->auth = $res['auth'];
        $user->status = $res['status'];

        $ress = $user->save();


        if($ress){
            // 修改成功,跳转到列表页

            return redirect('admin/user/list');
        } else {
//            back回到原地
            return back()->with('msg','修改失败');
        }


    }

    public function delete($id)
    {
        // 获取id
//        如果你希望在找不到模型时抛出异常，可以使用 findOrFail 以及 firstOrFail
//        方法。这些方法会检索查询的第一个结果。如果没有找到相应结果，就会抛出一个
        $user = User::findOrFail($id);

        $ress = $user->delete();

        if($ress){
            // 删除成功
            return redirect('admin/user/list')->with('msg','删除成功');
        } else {
            return redirect('admin/user/list')->with('msg','删除失败');
        }

    }


}