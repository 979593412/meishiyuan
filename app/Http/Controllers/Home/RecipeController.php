<?php

namespace App\Http\Controllers\Home;

use App\Model\Book_Food;
use App\Model\Book_Step;
use App\Model\Home\Cate;
use App\Model\Home_ad;
use App\Model\Recipe;
use App\Model\User;
use Image;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RecipeController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);
        $user = User::with('Details')->where('id',Session::get('user')->id)->first();
        //创建菜谱页面
        return view('home.recipe.create',['user'=>$user,'cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1.获取数据
        $input = $request->except('_token','food','dosage','step');

        //2.验证
        $validator = Validator::make($input, [
            'cid'=>'required',
            'title'=>'required',
            'content'=>'required',
            'pic'=>'required',
        ], [
            'cid.required'=>'菜谱分类必须选择一个',
            'title.required'=>'菜谱标题不能为空',
            'pic.required'=>'请上传一张菜谱封面',
            'content.required'=>'请输入菜谱描述'
        ]);

        if ($validator->fails()) {
            $request->session()->reflash();
            return redirect('/recipe/create')
                ->withErrors($validator)
                ->withInput();
        }

        //3.上传图片
        if ($request->hasFile('pic')){
            $file = $request->pic;
            $name = date('YmdHis').rand(1000,9999).'.jpg';
            $path = public_path().'/home/recipe/upload/'.$name;
            Image::make($file)->resize(660,490)->save($path);
        }

        //4.添加其余字段数据
        $input['uid'] = (Session::get('user')['id']);
        $input['pic'] = $name;

        //5.保存数据
        $res = Recipe::create($input);

        //6.获取刚刚插入数据库的菜谱ID
        $id = $res->id;

        $input = $request->except('_token','title','pic','content','cid','tip','step');

        //7.添加食材表数据
        $input['bid'] = $id;
        $input['food'] = json_encode($input['food']);
        $input['dosage'] = json_encode($input['dosage']);
        $res1 = Book_Food::create($input);


        $input = $request->except('_token','title','pic','content','cid','tip','food','dosage');
        //8.添加步骤表数据
        $input['bid'] = $id;
        $input['step'] = json_encode($input['step']);
        $res2 = Book_Step::create($input);

        if ($res&&$res1&&$res2){
            //9.添加成功，跳转
            return redirect('/recipe/'.$id);
        }else{
            return redirect('/recipe/create')->with('errors','添加菜谱失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取当前菜谱的详细信息
        $recipe = Recipe::with('Book_Food')->with('Book_Step')->where('id',$id)->first();
        if($recipe){
            //转换
            $food = json_decode($recipe->Book_Food->food);
            $dosage = json_decode($recipe->Book_Food->dosage);
            $step = json_decode($recipe->Book_Step->step);

            //获取用户信息
            $user = User::with('Details')->where('id',$recipe->uid)->first();

            //获取所在分类
            $cname = Cate::select('cname')->where('id',$recipe->cid)->first();

            //随便看看功能
            $recipeAll = Recipe::select('id')->get()->toArray();
            $arr = [];
            foreach ($recipeAll as $v){
                $arr[] = $v['id'];
            }
            $randArr = [];
            $arrid = array_rand($arr,5);
            foreach ($arrid as $v){
                $randArr[] = $arr[$v];
            }
            $randRecipe = Recipe::select('id','title')->find($randArr)->toArray();
            //广告
            $gg_b = Home_ad::where('position','recipe_b')->inRandomOrder()->first();
            $gg_t = Home_ad::where('position','recipe_t')->inRandomOrder()->take(2)->get();


            //菜谱详情页面
            return view('home.recipe.show',['gg_b'=>$gg_b,'gg_t'=>$gg_t,'recipe'=>$recipe,'user'=>$user,'food'=>$food,'dosage'=>$dosage,'step'=>$step,'cname'=>$cname,'randRecipe'=>$randRecipe,'warning'=>false]);
        }
        $gg_t = Home_ad::where('position','recipe_t')->inRandomOrder()->take(2)->get();
        $gg_b = Home_ad::where('position','recipe_b')->inRandomOrder()->first();

        dd();
        return view('home.recipe.show',['recipe'=>$recipe,'warning'=>true,'gg_t'=>$gg_t,'gg_b'=>$gg_b]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取分类信息
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);

        //根据菜谱id查询当前菜谱的全部信息
        $recipe = Recipe::with('Book_Food')->with('Book_Step')->where('id',$id)->first();

        if($recipe){
            $food = json_decode($recipe->Book_Food->food);
            $dosage = json_decode($recipe->Book_Food->dosage);
            $step = json_decode($recipe->Book_Step->step);
            $user = User::with('Details')->where('id',$recipe->uid)->first();
            //菜谱详情页面
            return view('home.recipe.edit',['recipe'=>$recipe,'user'=>$user,'food'=>$food,'dosage'=>$dosage,'step'=>$step,'cates'=>$cates]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //1.获取数据
        $input = $request->except('_token','_method','food','dosage','step');

        //2.验证
        $validator = Validator::make($input, [
            'cid'=>'required',
            'title'=>'required',
            'content'=>'required',
            'pic'=>'required',
        ], [
            'cid.required'=>'菜谱分类必须选择一个',
            'title.required'=>'菜谱标题不能为空',
            'pic.required'=>'请上传一张菜谱封面',
            'content.required'=>'请输入菜谱描述'
        ]);

        if ($validator->fails()) {
            $request->session()->reflash();
            return redirect('/recipe/create')
                ->withErrors($validator)
                ->withInput();
        }

        //3.上传图片
        if ($request->hasFile('pic')){
            $file = $request->pic;
            $name = date('YmdHis').rand(1000,9999).'.jpg';
            $path = public_path().'/home/recipe/upload/'.$name;
            Image::make($file)->resize(660,490)->save($path);
        }

        //4.修改其余字段数据
        $input['pic'] = $name;

        //5.保存数据
        $res = Recipe::where('id',$id)->update($input);

        $input = $request->except('_token','_method','title','pic','content','cid','tip','step');

        //6.修改食材表数据
        $input['bid'] = $id;
        $input['food'] = json_encode($input['food']);
        $input['dosage'] = json_encode($input['dosage']);
        $res1 = Book_Food::where('bid',$id)->update($input);


        $input = $request->except('_token','_method','title','pic','content','cid','tip','food','dosage');
        //7.修改步骤表数据
        $input['bid'] = $id;
        $input['step'] = json_encode($input['step']);
        $res2 = Book_Step::where('bid',$id)->update($input);

        if ($res&&$res1&&$res2){
            //8.修改成功，跳转
            return redirect('/recipe/'.$id);
        }else{
            return redirect('/recipe/'.$id.'/edit')->with('errors','修改菜谱失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
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
