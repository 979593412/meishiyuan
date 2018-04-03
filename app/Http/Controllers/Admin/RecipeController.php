<?php

namespace App\Http\Controllers\Admin;

use App\Model\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    //后台菜谱列表
    public function index()
    {
        $recipe = Recipe::all();
        return view('Admin.Recipe.index',['recipe'=>$recipe]);
    }

    public function on_off()
    {
        
    }

    public function del()
    {

    }
}
