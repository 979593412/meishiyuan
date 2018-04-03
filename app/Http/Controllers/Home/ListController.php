<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
use App\Model\Recipe;
class ListController extends CommonController
{
    public function index(Request $request,$id)
    {
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);

    
        $list = Cate::with('cook_book')->where("id",$id)->get();;
        dd($list);
        $recipe = Recipe::with(['Book_Food','User'])->get();
        return view('home.list',['cates'=>$cates,'recipe'=>$recipe]);
    }
}
