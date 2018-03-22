
@extends('admin.layouts')

@section('title', '后台用户浏览页面')

@section('content')

    <div class="admin-biaogelist">

    <div>

    @if(session('msg'))
    {{ session('msg') }}
    @endif
    </div>

    <div class="am-g">
    <div class="am-u-md-8 am-u-sm-centered">
    <form class="am-form" action="{{url('admin/user/update/'.$user->id) }}" method="post">
    {{ csrf_field() }}
    <fieldset class="am-form-set">
    用户名:<input type="text" name="username" value="{{ $user->username }}">
    密码:<input type="text" name="password" value="{{ $user->password }}">
    <tr>
    <td>后台权限</td>
    <td> <select name="auth">
    <option {{ ($user->auth==1)? 'selected' : '' }} value="1">超级管理员</option>
    <option {{ ($user->auth==2)? 'selected' : '' }} value="2">会员</option>

    </select>
    </td>



    </tr>
    <tr>
    <td>后台用户权限</td>

    <td>
    <select name="status">
    <option {{ ($user->status==1)? 'selected' : '' }} value="1">开通</option>
    <option {{ ($user->status==0)? 'selected' : '' }} value="0">禁用</option>

    </select>
    </td>
    </tr>
    </fieldset>
    <button type="submit" class="am-btn am-btn-primary am-btn-block">修改</button>
    </form>
    </div>
    </div>


@endsection


