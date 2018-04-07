<?php

namespace App\Http\Controllers\Home;

use App\Model\Details;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class detailsController extends Controller
{
    //用户详情页设置页
    public function index()
    {
        return view('home.details.details');
    }


    public function update(Request $request)
    {
        //检查昵称是否已经存在
        //$user = Details::where('nickname',$request->input('nickname') ) -> first();


//        echo '<pre>';
//        print_r($id);
//        dd();

        //if (empty($user->id)){

            //获取用户传过来的数据
            $birthday = implode('-', $request->only('year','month','day') );
            $addr = implode('-', $request->only('s_province','s_city','s_county') );
            $data = $request->only('nickname','info','sex','career' );
            $data['birthday'] = $birthday;
            $data['addr'] = $addr;

            if ($request->hasFile('face')) {
                //获取文件的后缀
                $ext = '.' . $request->file('face')->getClientOriginalExtension();
                //随机生成文件名
                $fileName = date('YmdHis') . mt_rand(1000, 9999) . $ext;

                $request->file('face')->move('./uploads/', $fileName);

                $data['face'] = $fileName;
            }
            //写入到数据库更新
            $id = session()->get('user')->id;
            $tf = Details::where('uid', $id)
                ->update($data);





            if ($tf) {

                    $user = Details::where('uid', $id)->first();
                    Session::put('userInfo', $user);

                return back() -> with('msg','设置成功');

            } else {
                return back() -> with('msg', '设置失败');
            }


//        } else {
//            return back() -> with('msg','昵称已经存在或为空~');
//        }
    }


}
