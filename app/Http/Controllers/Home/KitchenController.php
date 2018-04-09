<?php

namespace App\Http\Controllers\Home;
use App\Model\Recipe;
use DB;
use App\Model\Home\collect;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KitchenController extends Controller
{
    //我的厨房首页
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
//        dd($res);
//        $ress = collect::where('uid',$uid)->count();


        return view('home.kitchen.kitchen',['res'=>$res]);

//        return view('home.kitchen.kitchen')->with('res',$res);
    }
    public function caipu()
    {
        $uid = session()->get('user')->id;

        // dd($data);
        $res =  User::with('Cook_book')->where('id',$uid)->get();
//        dd($res);
//        $ress = User::where('id',$uid)->count();

        return view('home.kitchen.caipu',['res'=>$res]);

    }

    public function zuopin()
    {
        $uid = session()->get('user')->id;

        $res =  User::with('Cook_book')->where('id',$uid)->get();

        return view('home.kitchen.zuopin')->with('res',$res);

    }


}
