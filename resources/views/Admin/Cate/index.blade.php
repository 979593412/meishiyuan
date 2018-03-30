@extends('Admin.layout')
@section('title','菜谱分类')
@section('content')
<div class="admin-biaogelist">

    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 栏目名称</ul>

      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="{{  url('admin/links')}}">菜谱分类列表</a></dl>

      <dl>
        <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> <a style="color: white;" href="{{  url('admin/cate/create')}}">添加分类</a></button>
      </dl>


    </div>
  <form action="{{  url('admin/cate')}}" method="get" >
  <div class="am-btn-toolbars am-btn-toolbar am-kg am-cf" >
  <ul>
    <li><input type="text" name="cname" value="" class="am-form-field am-input-sm am-input-xm" placeholder="搜索分类" / ></li>
    <li><button class="am-btn am-radius am-btn-sm am-btn-success" style="margin-top: 3px;">搜索</button></li>
  </ul>
</div>
<div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
@if(Session::has('message'))
<div class="am-alert am-alert-success" data-am-alert>
  <button type="button" class="am-close">&times;</button>
  <p>{{Session::get('message')}}</p>
</div>

       @endif
</div>
  </form>
    <div class="am-form am-g">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-id" >ID</th>
                <th class="table-type">分类名称</th>
                <th style="width:120px" class="table-date am-hide-sm-only">添加子分类</th>
                <th style="width:200px" class="table-date am-hide-sm-only">创建时间</th>
                <th  class="table-set">操作</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cates as $v)
              <tr>
                <td>{{$v->id}}</td>
                <td><?php
                      $n = substr_count($v->path, ',') - 1;
                      if ($n<0) {$n=0;}
                      echo str_repeat('&nbsp;', $n * 10).'|---'.$v->cname;
                            ?></td>

                <td>
                <button class="am-btn am-btn-secondary am-round am-btn-xs am-icon-plus"> <a style="color: white;" href="/admin/cate/create/{{$v->id}}">添加子分类</a></button>
                </td>
                <td>{{$v->created_at}}</td>
                <td>
                  <form action="/admin/cate/{{$v->id}}" method="post" >
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a href="/admin/cate/{{$v->id}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round"><span class="am-icon-pencil-square-o"></span></a>
                         <button  onclick="confirm('确定要删除吗?')" class="am-btn am-btn-default am-btn-xs am-text-danger am-round"><span class="am-icon-trash-o"></span></button>
                      </form>
                    </div>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>


        </div>
@endsection