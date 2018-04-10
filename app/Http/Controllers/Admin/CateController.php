<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Cate;
use DB;
use App\Model\Cook_book;
class CateController extends Controller
{
    /**a
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $cates = DB::table('cook_category')->orderByRaw(" concat(path,id,',') ")->get();
        // dd($cates);
        // $cates = DB::select('select * from cook_category orderby concat(path,id,',') ',[]);
        // select id,concat(catpath,'-',id) as abspath,name from category order by abspath
        /*$cates = DB::select('select *,concat(path,id,",") as abspath from cook_category order by abspath');*/
         // $cates = DB::select('select * from cook_category order by concat(path,id,",")');
         $cates = Cate::get();
        $cates = $this->getTree($cates,0);

        //检测关键字
        $cname = $request->input('cname');
        if(!empty($cname)) {
            $cates = Cate::where('cname','like','%'.$cname.'%')->get();
        }
        // print_r($cates);
        // die;
        return view('Admin.Cate.index',['cates'=>$cates]);
    }
    protected function getTree($cates,$id=0){
        $subtree = [];//子孙数组
        foreach ($cates as $v) {
            if($v->pid==$id){
                $subtree[] = $v;
                $subtree = array_merge($subtree,$this->getTree($cates,$v->id));
            }
        }
        return $subtree;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=0)
    {
        $cates = Cate::get();
        $cates = $this->getTree($cates,0);
        return view('Admin.Cate.add',['cates'=>$cates,'id'=>$id]);
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
        $pid = $input['pid'];
            if ($pid==0) {
                $input['path'] = '0,';
            }else{
                $pcate = Cate::where("id","$pid")->first();
                $input['path'] = $pcate->path.$pid.',';
            }
            $res = Cate::create($input);
           if ($res) {
            return redirect('admin/cate')->with('message','添加成功');
        }else{
            return redirect('admin/cate/create')->with('message','添加失败');
        }
        // return "我是store";
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
        $cate = Cate::findOrFail($id);
        return view('Admin.Cate.edit',['cate'=>$cate]);
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
        $cname = $request->input('cname');
        $res = Cate::where('id',$id)->update(['cname'=>$cname]);
        if ($res) {
            return redirect('admin/cate')->with('message','修改成功');
        }else{
            return back();
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
        $pcate = Cate::where('pid',$id)->first();
        if ($pcate) {
           return redirect('admin/cate')->with('message','该类下面有子类，不能删除！');
        }
	$cook = Cook_book::where("cid",$id)->first();
        if ($cook) {
            return redirect('admin/cate')->with('message','该类下面有菜谱，不能删除！');
        }
        $cate = Cate::find($id)->delete();
        return redirect('admin/cate')->with('message','删除成功！');
    }
}
