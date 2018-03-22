
<!DOCTYPE html>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 show-anti-ie"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 show-anti-ie"> <![endif]-->
<!--[if IE 8]>    <html xmlns:ng="http://angularjs.org" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->

<head>


    <title>注册-美食源</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8;">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-itunes-app" content="app-id=460979760"/>
    <meta name="baidu-site-verification" content="HNAbHIxmbo" />
    <meta name="renderer" content="webkit">

    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}"  media="all">
    <link href="{{ asset('layui/css/layui.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/f97edcb6e2dbe6a5cca5.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/ae9cadb6e529cf2e052d.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/8f4003ba8b8ac1308f89.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('layui/layui.js')}}" charset="utf-8"></script>
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
      ['_setCustomVar', 4, 'dish_title', 'dish_title_2', 3],
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
    <div class="pure-u-1-6 site-nav align-right">已经有账号？<a href="{{url('/login')}}">登录</a></div>
  </div>

    </div>
  </div>
</div>



<div class="page-outer">
  <!--begin of page-container-->
  <div class="page-container">

      <div class="p40 has-bottom-border">
          <div class="page-title align-center pb40">注册一个新的账号</div>

          <div class="apply-box pure-u-1-3 font14">

              <div class="error red-font font12 w100"></div>

              <form class="layui-form apply-form login-box pb40 mb40" action="{{url('register/store')}}" autocomplete="off" method="POST">

                  @if (count($errors) > 0)
                      <div class="alert alert-right" style="color: #f00;">
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

                  <div class="mb10">
                      帐号
                  </div>
                  <input class="mb20 block w100"   type="text" name="username" lay-verify="username" autofocus="off" placeholder="请输入一个帐号" value="">

                  <div class="mb10">
                      密码
                  </div>
                  <input class="mb20 block w100"   type="password" name="password" lay-verify="pass" placeholder="设置密码（不少于6位）" value="">
                  <div class="mb10">
                      确认密码
                  </div>
                  <input class="mb20 block w100"   type="password" name="repassword" lay-verify="repass" placeholder="与密码相同" value="">

                  <div class="mb10">
                      点击验证
                  </div>

                  {!! Geetest::render() !!}

                  {{csrf_field()}}
                  <p>&nbsp;</p>
                  <input class="button" type="submit" value="注册" lay-submit="" lay-filter="*">
                  <br>

                  <div class="mt15 font12 gray-font">
                      注册即代表你同意<a href="JavaScript:void(0);" target="_blank">《美食源注册使用协议》</a>
                  </div>
              </form>
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
            ,repass: function (value) {
                var passwordValue = $('input[name=password]').val();
                if(value != passwordValue){
                    return '两次输入的密码不一致!';
                }
            }
        });


    });
</script>

</html>
