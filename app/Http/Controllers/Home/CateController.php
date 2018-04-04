<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
class CateController extends CommonController
{
    public function index($id)
    {
    	$cates = Cate::get();
    	$cate = Cate::where("id",$id)->first();
        $cates = $this->getTree($cates,$id);
    	return view('home.cate',['cates'=>$cates,'cate'=>$cate]);
    }
}
