@extends('Admin.layouts.app')
@section('title','友情链接')
@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
          <ul class="am-icon-flag on"> 栏目名称</ul>

          <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="{{url('admin/links/create')}}">添加友情链接</a></dl>

        </div>

    <div class="fbneirong">
      <form class="am-form" action="{{url('admin/links')}}" method="post" enctype='multipart/form-data'>
       @if(is_object($errors))
          <p style="color: red;">{{ $errors->first() }}</p>
           @else
           <p style="color: red">{{ $errors }}</p>
        @endif
          {{csrf_field()}}
        <div class="am-form-group am-cf">
          <div class="zuo">标题：</div>
          <div class="you">
            <input type="text" name="title" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入链接名称">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">链接地址：</div>
          <div class="you">
            <input type="text" name="url" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入链接地址 格式: http://">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">链接图片：</div>
          <div class="you" style="height: 45px;">
            <input type="file" name="pic" id="doc-ipt-file-1">
            <p class="am-form-help">请选择要上传的文件...</p>
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