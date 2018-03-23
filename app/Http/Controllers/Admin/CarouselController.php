<?php

namespace App\Http\Controllers\admin;

use App\Model\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询数据 显示到页面上

        $cc = DB::table('carousel')->paginate(5);


        return view('/Admin.Carousel.index',['cc'=>$cc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加轮播页面图
//        return view('admin.carousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all=$request->except('_token');
        //处理文件上传
        if(!$request->hasFile('pic')){

            echo '没有上传信息';
        }
        //设置一个新的名字
        $name=date('YmdHis',time()).rand(1111,9999);

        //获取后缀名
        $suffix=$request->file('pic')->getClientOriginalExtension();

        //拼接路径
        $res=$request->file('pic')->move('/uploads/',$name.'.'.$suffix);

        //添加到数据库 批量赋值
            $data=new Carousel;
            $data->pic = $res;
            $res=$data->save();

//        根据结果执行操作
        if($res){
            //添加成功
            echo '添加成功';
            return redirect('admin/fenlei');

        }else{
            return back()->with('msg','添加失败');
            echo '添加失败';
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //获取id

//        dd($id);

        $cc=Carousel::findOrFail($id);
        $res=$cc->delete();


        if($res){
            //添加成功
            return redirect('admin/fenlei');
        }else{
            return back()->with('msg','删除失败');
        }
    }

}
