<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Home_ad;

use Illuminate\Support\Facades\DB;

class Home_adController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据

        $gg = Home_ad::paginate(3);


//        print_r($gg);
        return view('admin.Home_ad.index', ['gg' => $gg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //广告位添加页面

        return view('admin.Home_ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //检车是否有文件上传
        if ($request->hasFile('pic')) {
            //获取文件的后缀
            $ext = '.' . $request->file('pic')->getClientOriginalExtension();
            //随机生成文件名
            $fileName = date('YmdHis') . mt_rand(1000, 9999) . $ext;

            $request->file('pic')->move('./uploads/', $fileName);

            $home_at['pic'] = $fileName;

//            print_r($fileName);

            $data = new Home_ad;
            $data->url = $request->url;
            $data->pic = $fileName;
            $tf = $data->save();

            if ($tf) {
                return redirect('/admin/home_ad');

            } else {
                return back()->with('sh', '添加失败');
            }

        } else {
            return back()->with('sh', '你还没有上传图片!!!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //批量删除
        if ( !empty($id) ) {
            $ids = trim($id,',');

            $ids = explode(',',$ids);

            $tf = Home_ad::destroy($ids);
        }

        if ($tf) {
            return redirect('/admin/home_ad');
        } else {
            return back()->with('sh', '删除失败');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $data = Home_ad::find($id);
//        print_r($data);

        return view('admin.Home_ad.edit', ['data' => $data]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Home_ad::find($id);
        //检车是否有文件上传
        if ($request->hasFile('pic')) {
            //获取文件的后缀
            $ext = '.' . $request->file('pic')->getClientOriginalExtension();
            //随机生成文件名
            $fileName = date('YmdHis') . mt_rand(1000, 9999) . $ext;

            $request->file('pic')->move('./uploads/', $fileName);

            $home_at['pic'] = $fileName;

//            print_r($fileName);
            $data->pic = $fileName;

        }
        //添加到数据库
        $data->url = $request->url;
        $tf = $data->save();

        if ($tf) {
            return redirect('/admin/home_ad');

        } else {
            return back() -> with('sh', '修改失败');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }

}

