<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //前台首页
    public function index()
    {
        return view('home.index');

    }
}
