<?php

namespace App\Http\Controllers\Home;

use Darryldecode\Cart\Cart;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\collect;

class CollectController extends Controller
{
    // 收藏列表页面
    public function index()
    {
        return view('home.collect.collect');
    }
    // 添加收藏
    public function add()
    {
        
       // var_dump($_GET);
       $cid = $_GET['cid'];
       $hid = $_GET['hid'];
       
       // $cid = str_split($cid);
       // $hid = str_split($hid);
       // var_dump($cid,$hid);
        collect::create(['cid' => $cid,'hid' => $hid]);

//       DB::table('collection')->insert(
//        ['cid' => $cid,'hid' => $hid]
//
//        );

       

    }
    // 删除收藏
    public function delete()
    {
        $cid = $_GET['cid'];
//        DB::table('collection')->where('cid',$cid)->delete();
        collect::where('cid',$cid)->delete();
//        collect::where(['cid' => $cid])->delete();
    }

    public function store()
    {

    }


    public function list()
    {
        return view('home.collect.index');
    }

}