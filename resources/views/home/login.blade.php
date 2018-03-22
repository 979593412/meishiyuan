
<!DOCTYPE html>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 show-anti-ie"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 show-anti-ie"> <![endif]-->
<!--[if IE 8]>    <html xmlns:ng="http://angularjs.org" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->

<head>



    <title>登录-美食源</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8;">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-itunes-app" content="app-id=460979760"/>
    <meta name="baidu-site-verification" content="HNAbHIxmbo" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">



    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}"  media="all">
    <link href="{{ asset('layui/css/layui.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/f97edcb6e2dbe6a5cca5.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/ae9cadb6e529cf2e052d.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/a344e16c6fab5f3a6110.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/8f4003ba8b8ac1308f89.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('layui/layui.js')}}" charset="utf-8"></script>
    <script src="{{ asset('home/js/ds.js') }}"></script>




    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "{{asset('home/js/hm.js')}}?ecd4feb5c351cc02583045a5813b5142";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>



    <script type='text/javascript'>
        var _vds = _vds || [];
        window._vds = _vds;
        (function(){
            _vds.push(['setAccountId', '8187ff886f0929da']);
            (function() {
                var vds = document.createElement('script');
                vds.type='text/javascript';
                vds.async = true;
                vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(vds, s);
            })();
        })();
    </script>






    <script type="text/javascript">
        _gaq=[['_setAccount', 'UA-22069234-1'],
            ['_setCustomVar', 1, 'user', 'anonymous', 3],
            ['_setCustomVar', 4, 'dish_title', 'dish_title_1', 3],
            ['_setCustomVar', 5, 'recommend_recipe_list', 'recommend_recipe_list_0', 3],
            ['_trackPageview'],['_trackPageLoadTime']];


        (function(){
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })()
    </script>

</head>



<body>

<div class="popup-layer">

    <div class="reveal-modal-bg"></div>

</div>

<div class="topbar-outer has-bottom-border">
    <div class="topbar-container">
        <div class="topbar">

            <div class="pure-g">
                <div class="pure-u-1-6">
                    <a href="{{url('/')}}" class="logo">美食源</a>
                </div>
                <div class="pure-u-2-3">&nbsp;</div>
                <div class="pure-u-1-6 site-nav align-right">没有账号？<a href="{{url('/register')}}">注册</a></div>
            </div>

        </div>
    </div>
</div>



<div class="page-outer">
    <!--begin of page-container-->
    <div class="page-container">


        <div class="login-box-container has-bottom-border">
            <div class="page-title align-center">经常来玩呦</div>
            <div class="login-box pure-g">
                <div class="social-login-box font14">
                    <a href="JavaScript:void(0);" class="mb15 social-login-icon social-login-icon-qq" data-ga-event="social/login/qq">QQ账号登录</a>
                    <a href="JavaScript:void(0);" class="mb15 social-login-icon social-login-icon-weibo" data-ga-event="social/login/weibo">新浪微博登录</a>
                    <a href="JavaScript:void(0);" class="social-login-icon social-login-icon-douban" data-ga-event="social/login/douban">豆瓣账号登录</a>
                </div>

                <div class="form-container">
                    <div class="error red-font font12 w100"></div>

                    <form class="layui-form login-form" method="POST" action="{{url('login/dologin')}}">


                        <div class="password-form">
                            @if (count($errors) > 0)
                                <div class="alert alert-right" style="color: #f00;margin-left:110px;">
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
                            <!-- Username -->
                            <div class="pure-g login-box-form-control">
                                <label for="username">用户名</label>
                                <input class="mail w100" type="text" name="username" lay-verify="username" placeholder="请输入用户名" value="{{old('username')}}" autocomplete="off" autofocus="autofocus">
                            </div>
                            <!-- Username -->

                            <!-- Password -->
                            <div class="pure-g login-box-form-control">
                                <label for="password">密码</label>
                                <input type="password" name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="password">
                            </div>
                            <!-- Password -->

                            <div class="pure-g login-box-form-control">
                                <label class="geetest-label">点击验证</label>
                                <div class="geetest">
                                    {!! Geetest::render() !!}
                                </div>
                            </div>
                        </div>
                        {{csrf_field()}}

                        <div class="login-box-form-control font12 clearfix">

                            <div class="remember-containter">
                                <label for="regagreement" class="font12 gray-font">我已阅读并同意<a href="JavaScript:void(0);" target="_blank">《美食源注册使用协议》</a></label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="login-box-form-control">

                            <input type="submit" value="登录" class="submit button" data-ga-event=social/login/via_pw lay-submit="" lay-filter="*">

                        </div>
                        <!-- Submit -->

                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- end of page-container -->
</div>

<div class="bottom-outer">
    <div class="bottom-container">

    </div>
</div>



<div class="footer-outer">
    <div class="footer-container">

    </div>
</div>


<div id='color_timer'></div>



</body>


<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;

        //自定义验证规则
        form.verify({
            username: function(value){
                if(!new RegExp("^[a-zA-Z0-9]+$").test(value)){
                    return '用户名只能由字母数字组合';
                }
                if(value.length < 4 || value.length > 10){
                    return '用户名必须在4-10位之间';
                }
                if(/^\d+\d+\d$/.test(value)){
                    return '用户名不能全为数字';
                }
            }
            ,pass: [
                /^[\S]{6,12}$/
                ,'密码必须6到12位，且不能出现空格'
            ]
        });


    });
</script>

</html>


