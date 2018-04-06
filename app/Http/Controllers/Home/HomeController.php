<?php

namespace App\Http\Controllers\Home;

use App\Model\Details;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
use App\Model\Recipe;
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
        //左侧菜单栏分类
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);

        //新秀菜谱
        $recipe = Recipe::OrderBy('id','desc')->take(6)->get();
        $three = [];
        $six = [];
        $i = 1;
        foreach ($recipe as $v) {
            
            if ($i <= 3) {
                $three[] = $v;
            }else{
                 $six[] = $v;
            }
           $i++;
        }

        //最近流行
        $popular = Recipe::with('User')->OrderBy('collect','desc')->take(8)->get();
        return view('home.index',['cates'=>$cates,'three'=>$three,'six'=>$six,'populer'=>$popular]);

    }
}
