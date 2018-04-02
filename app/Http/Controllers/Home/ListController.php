<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cate;
class ListController extends CommonController
{
    public function index()
    {
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);
        return view('home.list',['cates'=>$cates]);
    }
}
