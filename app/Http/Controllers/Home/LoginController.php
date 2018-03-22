<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    /*
     * 显示登录页面
     * */
    public function login()
    {
        return view('home.login');
    }

    /*
     * 显示注册页面
     * */
    public function register()
    {
        //
        return view('home.register');
    }

    public function create()
    {
        
    }
}
