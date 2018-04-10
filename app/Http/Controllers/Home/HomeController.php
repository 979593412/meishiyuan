<?php

namespace App\Http\Controllers\Home;

use App\Model\Carousel;
use App\Model\Collection;
use App\Model\Details;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use Session;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
use DB;
use App\Model\Recipe;
use App\Model\Home_ad;
use App\Model\Admin\Links;

class HomeController extends CommonController
{
    //前台首页
    public function index()
    {

        if (!empty(session()->get('user')->id)) {


            $id = session()->get('user')->id;

            $user = Details::where('uid', $id)->first();

            Session::put('userInfo', $user);

            //当前用户菜谱总数
            $recipeCount = Recipe::where('uid',$id)->count();
            if (empty($recipeCount)){
                $recipeCount = 0;
            }

            //当前用户收藏总数
            $collectCount = Collection::where('uid',$id)->count();
            if (empty($collectCount)){
                $collectCount = 0;
            }

        }else{
            $recipeCount = 0;
            $collectCount = 0;
        }





        $lunbo=DB::table('carousel')->get();
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
        $gg_r = Home_ad::where('position','right')->inRandomOrder()->take(4)->get();
        $gg_t = Home_ad::where('position','top')->inRandomOrder()->first();
        $gg_l = Home_ad::where('position','left')->inRandomOrder()->first();

        //友情链接
        $links = Links::get()->toArray();
        Session::put('links',$links);

        return view('home.index',['cates'=>$cates,'gg_r'=>$gg_r,'gg_t'=>$gg_t,'gg_l'=>$gg_l,'three'=>$three,'six'=>$six,'populer'=>$popular,'recipeCount'=>$recipeCount,'collectCount'=>$collectCount])->with('lunbo',$lunbo);

    }

}
