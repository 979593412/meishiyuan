@extends('Admin.layout')
@section('title','添加分类')
@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
          <ul class="am-icon-flag on"> 添加分类</ul>

          <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="{{url('admin/cate/create')}}">添加分类</a></dl>

        </div>

    <div class="fbneirong">
      <form class="am-form" action="/admin/cate" method="post">
       @if(is_object($errors))
          <p style="color: red;">{{ $errors->first() }}</p>
           @else
           <p style="color: red">{{ $errors }}</p>
        @endif
          {{csrf_field()}}

         <div class="am-form-group" style="display: inline-block;">
             <div class="zuo">上级分类：</div>
             <select data-am-selected name="pid">
                <option value="0">顶级分类</option>
                <?php foreach ($cates as $k => $v) {
                    $n = substr_count($v->path,',') - 1;
                    if ($n<0) {$n=0;}
                    echo "<option ";
                    if ($v->id==$id){echo 'selected ';}
                    echo " value ='$v->id'>".str_repeat('&nbsp;', $n*4)."|----{$v->cname}</option>";
                }?>
             </select>
        </div>

        <div class="am-form-group am-cf">
          <div class="zuo">类别名称：</div>
          <div class="you">
            <input type="text" name="cname" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入类别名称" style="width:200px">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <button type="submit" class="am-btn am-btn-success am-radius">确认添加</button>

          </div>
        </div>
      </form>
    </div>
@endsection