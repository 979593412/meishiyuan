<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
     <a href="{{url('/login')}}">登录</a>
     <a href="{{url('/login/create')}}">注册</a>

    @section('content')

    @show
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
