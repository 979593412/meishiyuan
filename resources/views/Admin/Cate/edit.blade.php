@extends('Admin.layout')
@section('title','添加分类')
@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
          <ul class="am-icon-flag on"> 修改分类</ul>

          <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">修改分类</a></dl>

        </div>

    <div class="fbneirong">
      <form class="am-form" action="/admin/cate/{{$cate->id}}" method="post">
          {{csrf_field()}}
           {{ method_field('PUT') }}
        <div class="am-form-group am-cf">
          <div class="zuo">类别名称：</div>
          <div class="you">
            <input type="text" name="cname" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入类别名称" style="width:200px">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <button type="submit" class="am-btn am-btn-success am-radius">确认修改</button>

          </div>
        </div>
      </form>
    </div>
@endsection