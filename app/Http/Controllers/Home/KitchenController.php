<?php

namespace App\Http\Controllers\Home;
use App\Model\Cook_book;
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
//
//        $user =User::find('1');
//        $cook=$user->cook_book;

//        $all=User::with('cook_book')->get();
//        dd($cook);
//        $shoucang=DB::table('collection')->first();
//        $caipu=DB::table('cook_book')->first();

        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.user_id')
            ->get();
//        dd($users);

        return view('home.kitchen.kitchen')->with('users',$users);
    }
    public function caipu()
    {
        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.user_id')
            ->get();

        return view('home.kitchen.caipu')->with('users',$users);
    }

    public function zuopin()
    {
        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.user_id')
            ->get();

        return view('home.kitchen.zuopin')->with('users',$users);
    }
    //创建菜单
    public function caidan()
    {
        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.user_id')
            ->get();

        return view('home.kitchen.caidan')->with('users',$users);
    }
    //创建菜单
    public function createcaidan()
    {
        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.user_id')
            ->get();

        return view('home.kitchen.createcaidan')->with('users',$users);
    }

    //创建菜单
    public function storecaidan(Request $request)
    {
        $input=$request->except('_token');
        dd($input);

        return view('home.kitchen.createcaidan');
    }
    public function liuyanban()
    {
        $users = DB::table('home_user')
            ->leftJoin('cook_book', 'home_user.id', '=', 'cook_book.user_id')
            ->get();

        return view('home.kitchen.liuyanban')->with('users',$users);
    }

}
