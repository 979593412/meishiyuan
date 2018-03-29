<?php

namespace App\Http\Controllers\Home;

use App\Model\Details;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        if (!empty(session()->get('user')->id)) {


            $id = session()->get('user')->id;

            $user = Details::where('uid', $id)->first();

            Session::put('userInfo', $user);

        }

        return view('home.index');

    }
}
