@extends('Admin.layout')

@section('title', '后台用户浏览页面')

@section('content')
    @if (session()->get('admin_user')->auth == 1)
    <div class="admin-biaogelist">

        <div>

            @if(session('msg'))
                {{ session('msg') }}
            @endif
        </div>

        <div class="am-g">
            <div class="am-u-md-8 am-u-sm-centered">
                <form class="am-form" action="{{url('/user/update/'.$user->id) }}" method="post">
                    {{ csrf_field() }}

                        原密码:<input type="text" name="repass" value="">
                        密码:<input type="text" name="password" value="">

                        <tr>
                            <td>后台权限</td>
                            <td> <select name="auth">
                                    <option {{ ($user->auth==1)? 'selected' : '' }} value="1">超级管理员</option>
                                    <option {{ ($user->auth==2)? 'selected' : '' }} value="2">管理员</option>

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
    @else
            <div class="admin-biaogelist">
                <div>

                    @if(session('msg'))
                        {{ session('msg') }}
                    @endif
                </div>

                <div class="am-g">
                    <div class="am-u-md-8 am-u-sm-centered">
                        <form class="am-form" action="{{url('/user/update/'.$user->id) }}" method="post">
                            {{ csrf_field() }}
                            <fieldset class="am-form-set">

                                原密码:<input type="text" name="repass" value="">
                                新密码:<input type="text" name="password" value="">


                            </fieldset>
                            <button type="submit" class="am-btn am-btn-primary am-btn-block">修改</button>
                        </form>
                    </div>
            <div>
    @endif


@endsection
