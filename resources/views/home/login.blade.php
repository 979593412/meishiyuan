@extends('home.layouts.app')

@section('title','美食源-登录')
@section('content')
    <form action="{{url('/login')}}" method="post">
        邮箱：<input type="email" name="email"><br>
        密码：<input type="password" name="pwd"><br>
        {{csrf_field()}}
        <input type="submit" value="登录">
    </form>
@endsection

