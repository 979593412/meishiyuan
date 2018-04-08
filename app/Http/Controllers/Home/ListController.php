<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
use App\Model\Recipe;
use DB;
class ListController extends CommonController
{
    public function index(Request $request,$id)
    { 
    	// dd($request->all());
    	//左侧导航菜单
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);

        // 获取分类名称
        $cate = Cate::find($id);
        $cate = $cate->cname;
        //获取分类下左右菜谱
        $recipe = Recipe::with('User')->where("cid",$id)->paginate(3);
        return view('home.list',['cates'=>$cates,'cate'=>$cate,'recipe'=>$recipe,'request'=>$request]);
    }
    //搜索页
    public function search(Request $request)
    {
    	$cates = Cate::get();
        $cates = $this->getTree($cates,0);
        $title = $request->input('title');
        $cate = $title;
    	$recipe = Recipe::with('User')->where('title','like','%'.$title.'%')->paginate(3);
    	return view('home.list',['cates'=>$cates,'cate'=>$cate,'recipe'=>$recipe,'request'=>$request]);
    }
}
