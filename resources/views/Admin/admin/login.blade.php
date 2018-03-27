<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Admin/login/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Admin/login/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/Admin/login/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Admin/login/css/admin.css">
    <link rel="stylesheet" href="/Admin/login/css/app.css">
    <style type="text/css">
        #yanzhengma{
            float:right;
            position: relative;
            top: -42px;
            right: -230px;
        }
    </style>
</head>

<body data-type="login">
<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Admin<span> Login</span> <i class="am-icon-skyatlas"></i>
            </div>
        </div>

        <div class="login-font">
            <i>Log In </i> or <span> Sign Up</span>
        </div>
        <div class="am-u-sm-10 login-am-center">
            {{--错误提示信息--}}
            @if (count($errors) > 0)
                <div style="color: red" class="alert alert-danger">
                    <ul>
                        @if(is_object($errors))
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                            @else
                            <li>{{ $errors }}</li>
                        @endif
                    </ul>
                </div>
            @endif
            <form action="{{url('/admin/dologin')}}" method="post" class="am-form">
                <fieldset>
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <input type="text" class="" value="{{old('username')}}" name="username" autocomplete="off" id="doc-ipt-email-1" placeholder="请输入您的账号">
                    </div>
                    <div class="am-form-group">
                        <input type="password"  class="" name="password" autocomplete="off" id="doc-ipt-pwd-1" placeholder="请输入您的密码">
                    </div>
                    <br/>
                    <div style="width:250px;" class="am-form-group">
                        <input type="text"   name="code" id="code" autocomplete="off"  placeholder="验证码">
                        <img id="yanzhengma"  src="{{url('/admin/code')}}" onclick="this.src ='{{url('/admin/code/')}}?'+ Math.random()"/>
                        {{--// 第三方验证码生成  gregwar/captcha 插件--}}
                        {{--<a href="javascript:;" onclick='javascript:re_captcha()'><img src="{{url('/code/captcha/1')}}" id="123456" alt=""></a>--}}

                    </div>

                    <p><button type="submit" class="am-btn am-btn-default">登录</button></p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
{{--// 第三方验证码生成  gregwar/captcha 插件--}}
{{--<script type="text/javascript">--}}
    {{--function re_captcha() {--}}
        {{--$url = "{{ URL('/code/captcha') }}";--}}
        {{--$url = $url + "/1?a=" + Math.random();--}}
        {{--document.getElementById('123456').src = $url;--}}
{{--}--}}
{{--</script>--}}

<script src="/Admin/login/js/jquery.min.js"></script>
<script src="/Admin/login/js/amazeui.min.js"></script>
<script src="/Admin/login/js/app.js"></script>
</body>

</html>