<?php

namespace App\Http\Controllers\Home;

use App\Model\Recipe;
use Darryldecode\Cart\Cart;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Home\collect;
use App\Model\Cook_book;

class CollectController extends Controller
{
    // 收藏列表页面
    public function index()
    {
        $uid = session()->get('user')->id;


        $cook = collect::where('uid',$uid)->select(['bid'])->get()->toArray();
        // dd($cook);
        // $a = $cook->bid;

        $data = [];
        foreach ($cook as $key => $value) {
          $data[] = $value['bid'];
        }
        // dd($data);

        $res =  Cook_book::whereIn('id',$data)->get();

        // dd($res);
        // $res = collect::with('Cook_book')->where(['bid'=>$data,'uid'=>$uid])->get();
        // dd($res);
        $ress = collect::where('uid',$uid)->count();
       
        // $reas = collect::where('bid',)

        return view('home.collect.collect',['res'=>$res,'ress'=>$ress]);
    }
    // 添加收藏
    public function add()
    {

       $bid = $_GET['bid'];

       // $res = collect::where('bid',$bid)->count();
       // dd($res);
       $uid = $_GET['uid'];
       $res = collect::where(['bid' => $bid,'uid' => $uid])->first();
       if(!$res){
            collect::create(['bid' => $bid,'uid' => $uid]);
       }

    


       

    }
    // 删除收藏
    public function delete()
    { 
       
        $uid = $_GET['uid'];
        $bid = $_GET['bid'];


       $res =  collect::where(['uid'=>$uid,'bid'=>$bid])->delete();

    }

    public function store()
    {

    }


    public function list()
    {
        return view('home.collect.index');
    }

    public function shoucang()
    {
        $bid = $_GET['bid'];
       // echo $bid;
       



        
        $reas = collect::where('bid',$bid)->count();
        echo $reas;
    }

}