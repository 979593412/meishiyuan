@extends('Admin.layouts.app')
@section('title','友情链接')
@section('content')
<div class="admin-biaogelist">

    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 栏目名称</ul>

      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="{{  url('admin/links')}}">友情链接列表</a></dl>

      <dl>
        <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> <a style="color: white;" href="{{  url('admin/links/create')}}">添加链接</a></button>
      </dl>


    </div>
  <form action="{{  url('admin/links')}}" method="get" >
  <div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
  <ul>
    <li><input type="text" name="title" value="" class="am-form-field am-input-sm am-input-xm" placeholder="关键词搜索" /></li>
    <li><button class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: 3px;">搜索</button></li>
  </ul>
</div>
  </form>
    <div class="am-form am-g">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-id" >ID</th>
                <th class="table-type">名称</th>
                <th class="table-type">链接地址</th>
                <th class="table-type">网站LOGO</th>
                <th class="table-date am-hide-sm-only">添加日期</th>
                <th width="163px" class="table-set">操作</th>
              </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->title}}</td>
                <td>{{$user->url}}</td>
                <td><img style="width:120px" src="{{$user->pic}}" alt=""></td>
                <td>{{$user->created_at}}</td>
                <td>
                  <form action="/admin/links/{{$user->id}}" method="post" >
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a href="/admin/links/{{$user->id}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round"><span class="am-icon-pencil-square-o"></span></a>
                         <button class="am-btn am-btn-default am-btn-xs am-text-danger am-round"><span class="am-icon-trash-o"></span></button>
                      </form>
                    </div>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
     <center>{!! $users->appends($request->all())->render() !!}</center>

        </div>
@endsection