<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Cate;
use App\Model\Book_Food;
use App\Model\Book_Step;
use App\Model\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    //后台菜谱列表
    public function index(Request $request)
    {
        if (isset($request->search)){ 
            $search = $request->search;
            //按照标题查询菜谱
            $recipe = Recipe::where('title','like','%'.$search.'%')->paginate(5);
        }else{
            $search = '';
            //查询菜谱全部数据
            $recipe = Recipe::paginate(5);
        }


        $arrKey = [];
        $arrVal = [];

        //查询分类数据
        $category = Cate::select('id','cname')->get()->toArray();

        foreach ($category as $v){
            $arrKey[] = $v['id'];
            $arrVal[] = $v['cname'];
        }
        $arr = array_combine($arrKey,$arrVal);

        return view('Admin.Recipe.index',['recipe'=>$recipe,'arr'=>$arr,'search'=>$search]);
    }

    public function on_off()
    {
        //获取菜谱ID
        $id = $_GET['id'];

        $recipe = Recipe::where('id',$id)->select('status')->first();

        if ($recipe->status == '1'){
            $status = '0';
        }else if ($recipe->status == '0'){
            $status = '1';
        }
        $res = Recipe::where('id',$id)->update(['status'=>$status]);
        return $status;

    }

    public function delete()
    {
        //获取菜谱ID
        $id = $_GET['id'];

        //获取图片名称
        $pic = Recipe::findOrFail($id)->pic;

        //拼接图片路径
        $path = public_path().'/home/recipe/upload/'.$pic;
        //删除图片
        $fdel = \File::delete($path);

        //删除菜单
        $res = Recipe::findOrFail($id)->delete();

        //删除菜单关联食材和步骤
        $res1 = Book_Food::where('bid',$id)->delete();
        $res2 = Book_Step::where('bid',$id)->delete();

        //判断
        if ($res && $res1 && $res2 && $fdel){
            return '1';
        }
        return '0';
    }

}
