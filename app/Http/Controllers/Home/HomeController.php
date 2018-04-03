<?php

namespace App\Http\Controllers\Home;

use App\Model\Details;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
class HomeController extends CommonController
{
    //前台首页
    public function index()
    {

        if (!empty(session()->get('user')->id)) {


            $id = session()->get('user')->id;

            $user = Details::where('uid', $id)->first();

            Session::put('userInfo', $user);

        }

        $cates = Cate::get();
        $cates = $this->getTree($cates,0);
        return view('home.index',['cates'=>$cates]);

    }
}
