<?php

namespace App\Http\Controllers\Home;
use App\Model\Recipe;
use DB;
use App\Model\Collection;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KitchenController extends Controller
{
    //我的厨房首页
    public function index()
    {

        $all=User::with('cook_book')->get();

        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.uid')
            ->get();

        return view('home.kitchen.kitchen')->with('users',$users);
    }
    public function caipu()
    {
        $user = DB::table('home_user')->first();
        $shoucang=DB::table('collection')->get();

        return view('home.kitchen.caipu')->with('user',$user,'shoucang',$shoucang);
    }

    public function zuopin()
    {
        $user = DB::table('home_user')->get();
        $shoucang=DB::table('collection')->get();

        return view('home.kitchen.zuopin')->with('user',$user,'shoucang',$shoucang);
    }
    public function caidan()
    {
        $user = DB::table('home_user')->first();
        $shoucang=DB::table('collection')->get();

        return view('home.kitchen.caidan')->with('user',$user,'shoucang',$shoucang);
    }
    public function liuyanban()
    {
        $user = DB::table('home_user')->get();
        $shoucang=DB::table('collection')->get();

        return view('home.kitchen.liuyanban')->with('user',$user,'shoucang',$shoucang);
    }

}
