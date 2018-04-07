<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Links;
use Validator;
class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = Links::orderBy('id','desc')
            ->where(function($query) use($request){
                //检测关键字
                $title = $request->input('title');
                if(!empty($title)) {
                    $query->where('title','like','%'.$title.'%');
                }
            })
            ->paginate(3);
        return view('Admin.Links.index',['users'=>$users,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Links.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
         //验证
        $rule = [
            'title'=>'required',
            'url'=>'required',
        ];
        $msg = [
            'required'=>'请填写:attribute !',
        ];
        $mean = [
            'title'=>'标题',
            'url'=>'链接地址',
        ];

        $validator = Validator::make($input,$rule,$msg,$mean);
        //如果验证失败
        if ($validator->fails()) {
            return redirect('admin/links/create')
                ->withErrors($validator)
                ->withInput();
        }

         if(!$request->hasFile('pic')){

            return redirect('admin/links/create')->with('errors','请上传网站链接图片');
        }

        //设置一个新的名字
        $name = date('YmdHis',time()).rand(1111,9999);
        //获取后缀  123.jpg   $suffix = jpg
       $suffix = $request->file('pic')->extension();
       $request->file('pic')->move('./uploads',$name.'.'.$suffix);
        //往数据库里面添加
        $input['pic'] = '/uploads/'.$name.'.'.$suffix;


        $res = Links::create(['title'=>$input['title'],'url'=>$input['url'],'pic'=>$input['pic']]);
        if ($res) {
            return redirect('admin/links')->with('message','添加成功');
        }else{
            return redirect('admin/links/create')->with('errors','添加失败');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Links::findOrFail($id);
        return view('Admin/Links/edit',['link'=>$link]);
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
        $input = $request->except('_token');
         //验证
         if($request->hasFile('pic')){
        //设置一个新的名字
        $name = date('YmdHis',time()).rand(1111,9999);
        //获取后缀  123.jpg   $suffix = jpg
       $suffix = $request->file('pic')->extension();
       $request->file('pic')->move('./uploads',$name.'.'.$suffix);
        //往数据库里面添加
        $input['pic'] = '/uploads/'.$name.'.'.$suffix;
        $res = Links::where('id',$id)->update(['title'=>$input['title'],'url'=>$input['url'],'pic'=>$input['pic']]);
        }else{
             $res = Links::where('id',$id)->update(['title'=>$input['title'],'url'=>$input['url']]);
        }

        if ($res) {
            return redirect('admin/links')->with('message','添加成功');
        }else{
            return redirect('admin/links/create')->with('errors','添加失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Links::find($id)->delete();
        return redirect('admin/links')->with('message','删除成功');
    }
}
