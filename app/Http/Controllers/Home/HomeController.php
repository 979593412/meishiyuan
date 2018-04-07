<?php

namespace App\Http\Controllers\Home;

use App\Model\Details;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
use App\Model\Home_ad;
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
        $gg_r = Home_ad::where('position','right')->inRandomOrder()->take(4)->get();
        $gg_t = Home_ad::where('position','top')->inRandomOrder()->first();
        $gg_l = Home_ad::where('position','left')->inRandomOrder()->first();

        return view('home.index',['cates'=>$cates,'gg_r'=>$gg_r,'gg_t'=>$gg_t,'gg_l'=>$gg_l]);

    }
}
