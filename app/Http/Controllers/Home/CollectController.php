<?php

namespace App\Http\Controllers\Home;

use App\Model\Recipe;
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
        $uid = session()->get('user')->id;


        $cook = collect::where('uid',$uid)->select(['bid'])->get()->toArray();
        // dd($cook);
        $data = [];
        foreach ($cook as $key => $value) {
          $data[] = $value['bid'];
        }
        // dd($data);

        $res =  collect::with('Cook_book')->whereIn('bid',$data)->get();
        $ress = collect::where('uid',$uid)->count();
  
       
        return view('home.collect.collect',['res'=>$res,'ress'=>$ress]);
    }
    // 添加收藏
    public function add()
    {
        
       // var_dump($_GET);  
       $bid = $_GET['bid'];
       $uid = $_GET['uid'];
       
       // $bid = str_split($bid);
       // $uid = str_split($uid);
       // var_dump($bid,$uid);
        collect::create(['bid' => $bid,'uid' => $uid]);


       

    }
    // 删除收藏
    public function delete()
    { 
       
        $uid = $_GET['uid'];
        $bid = $_GET['bid'];


       $res =  collect::where(['uid'=>$uid,'bid'=>$bid])->delete();

        if($res){
            // 删除成功
            return redirect('home/dianzan');
        } else {
            return redirect('home/dainzan')->with('msg','删除失败');
        }




    }

    public function store()
    {

    }


    public function list()
    {
        return view('home.collect.index');
    }

}