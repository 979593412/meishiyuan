<?php

namespace App\Http\Controllers\Home;

use App\Model\Cook_book;
use App\Model\Details;
use App\Model\Home\collect;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class other_detailsController extends Controller
{

    public function index($id)
    {
        $uid = $id;

        $details = Details::where('uid',$uid)->first();


//        dd($details);

        $cook = collect::where('uid',$uid)->select(['bid'])->get()->toArray();


        $data = [];
        foreach ($cook as $key => $value) {
            $data[] = $value['bid'];
        }

        $res =  Cook_book::whereIn('id',$data)->get();

//        dd($res);
        return view('home.other_details.overview',['res'=>$res,'details'=>$details]);
    }

    public  function caipu($id)
    {
        $uid = $id;
        $details = Details::where('uid',$uid)->first();

        // dd($data);

        $res =  User::with('Cook_book')->where('id',$uid)->get();
//        dd($res);
//        $ress = User::where('id',$uid)->count();

        return view('home.other_details.caipu',['res'=>$res,'details'=>$details]);
    }

    public function zuopin($id)
    {
        $uid = $id;
        $details = Details::where('uid',$uid)->first();
        $res =  User::with('Cook_book')->where('id',$uid)->get();

        return view('home.other_details.zuopin',['res'=>$res,'details'=>$details]);
    }
}
