<!DOCTYPE html>
<html lang="zh">
<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8;">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-itunes-app" content="app-id=460979760"/>
    <meta name="baidu-site-verification" content="HNAbHIxmbo" />
    <meta name="renderer" content="webkit">

    <meta name="keywords" content="菜谱,美食,烹饪,美食源">
    <meta name="description" content="美食源美食菜谱网倡导在家烹饪、健康的生活方式，提供有版权的实用菜谱做法与饮食知识，提供厨师和美食爱好者一个记录、分享的平台。">
    <meta property="wb:webmaster" content="3616bc72d0bf0c7e" />
    <meta name="baidu-site-verification" content="jgrXKIVSwYY6edn3" />
    <meta name="baidu_union_verify" content="1127369b241761564cc2cde1918c2728">
    <meta name="google-site-verification" content="P1EBtoECR-tdJAIn5lbKg3JB21G9XRAVWOZreCP94Uo" />
    <meta name="360-site-verification" content="3ca3d9b3b02ce3377c9ba63740b3b71a" />
    <meta name="sogou_site_verification" content="BiVBs1HCQM"/>
    <meta name="baidu_union_verify" content="2e1ace664f00eeef623d4af0d37edf17">
    <meta name="shenma-site-verification" content="cfb8d844a5731f6993ba537751ae9d6b_1468826090">
    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}"  media="all">
    <script src="{{asset('layui/layui.js')}}" charset="utf-8"></script>
    <script src="{{asset('home/js/jquery-3.2.1.min.js')}}"></script>
    <link href="{{asset('home/css/f97edcb6e2dbe6a5cca5.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('home/css/ae9cadb6e529cf2e052d.css')}}" rel="stylesheet" type="text/css">
    
    <!-- 点赞 -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/dianzan.css')}}"/>


    <link href="{{asset('home/css/5b114797a93be8f6e3f7.css')}}" rel="stylesheet" type="text/css">

    <script>
        //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
            var MAXWIDTH  = 80;
            var MAXHEIGHT = 80;
            var div = document.getElementById('preview');
            if (file.files && file.files[0])
            {
                div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
                var img = document.getElementById('imghead');
                img.onload = function(){
                    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                    img.width  =  rect.width;
                    img.height =  rect.height;
                    img.style.marginTop = rect.top+'px';
                }
                var reader = new FileReader();
                reader.onload = function(evt){img.src = evt.target.result;}
                reader.readAsDataURL(file.files[0]);
            }
            else //兼容IE
            {
                var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
                file.select();
                var src = document.selection.createRange().text;
                div.innerHTML = '<img id=imghead>';
                var img = document.getElementById('imghead');
                img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
                div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
            }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight ){
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;

                if( rateWidth > rateHeight ){
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else{
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
    </script>


</head>

<body style="height:100%;">

<div class="topbar-outer has-bottom-border">
    <div class="topbar-container">
        <div class="topbar">

            <div class="pure-g">
                <div class="pure-u-1-6">
                    <a href="{{url('/')}}" class="logo">美食源</a>
                </div>
                <div class="pure-u-5-6">
                    <div class="float-left">
                        <form class="search" action="http://www.xiachufang.com/search/">
                            <input type="text" name="keyword" class="typeahead float-left" value="" placeholder="搜索菜谱、食材">
                            <input type="hidden" name="cat" value="1001">
                            <input type="submit" value="搜菜谱" class="button float-left">
                        </form>
                    </div>
                    <div class="float-left">
                        <ul class="site-nav plain pure-g">
                            <li class="pure-u"><a href="http://www.xiachufang.com/feature/vip/" rel="nofollow">会员专区</a></li>

                            <li class="pure-u"><a href="http://www.xiachufang.com/explore/menu/collect/" data-ga-event="公共页面/导航栏/$text">菜单</a></li>
                            <li class="pure-u"><a href="http://www.xiachufang.com/activity/" data-ga-event="公共页面/导航栏/$text">作品动态</a></li>
                        </ul>
                    </div>
                    <div class="float-right clearfix">

                        <div class="user-action">
                            @if(!Session::get('user'))
                                <a href="{{url('/login')}}" data-ga-event="公共页面/导航栏/$text">登录</a>&nbsp;&nbsp;
                                <a href="{{url('/register')}}" data-ga-event="公共页面/导航栏/$text">注册</a>
                            @else
                                <div class="user-action">
                                    <div class="user-nav">
                                        <a class="user-avatar avatar" href="#" data-ga-event="公共页面/导航栏/$text"><img src="{{!empty(session()->get('userInfo')->face) ? '/uploads/'.session()->get('userInfo')->face : '/home/images/face.png'}}"  width="30" height="30"></a>
                                        <div class="user-nav-submenu hidden" style="display: none;">
                                            <ul class="plain">
                                                <li><a href="{{url('/home/chufang')}}" data-ga-event="公共页面/导航栏/$text">我的厨房</a></li>
                                                <li><a href="#" data-ga-event="公共页面/导航栏/$text">我的菜单</a></li>
                                                <li><a href="/home/details" data-ga-event="公共页面/导航栏/$text">帐号设置</a></li>
                                                <li><a href="#" data-ga-event="公共页面/导航栏/$text">发现好友</a></li>
                                                <li><a href="{{url('/login/outlogin')}}">退出</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="user-collect" href="/home/dianzan" title="我的收藏">
                                        <i class="icon"></i>
                                    </a>

                                </div>
                            @endif
                        </div>



                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="page-outer">
    <div class="page-container">

            @section('content')

            @show
    </div>
</div>

<div class="bottom-outer">
    <div class="bottom-container">

    </div>
</div>



<div class="footer-outer">
    <div class="footer-container">

        <div class="pure-g buttons">



            <a href="#" class="button">入驻下厨房市集</a>

            <a href="{{asset('/home/gghz')}}" class="button">广告合作</a>
        </div>

        <div class="pure-g">
            <div class="pure-u-3-4">
                <a data-ga-event="公共页面/footer/$text" href="http://blog.xiachufang.com" target="_blank" title="美食生活杂志">美食生活杂志</a> &nbsp;
                <a href="http://www.xiachufang.com/job/" target="_blank" title="厨房工作">厨房工作</a> &nbsp;
                <a data-ga-event="公共页面/footer/$text" href="http://www.xiachufang.com/principle/" target="_blank" title="社区指导原则">社区指导原则</a> &nbsp;
                <a data-ga-event="公共页面/footer/$text" href="https://site.douban.com/106718/room/1939571/" target="_blank" title="下厨房出版的书">下厨房出版的书</a> &nbsp;
                <a data-ga-event="公共页面/footer/$text" href="http://www.xiachufang.com/faq/" target="_blank" title="帮助中心">帮助中心</a> &nbsp;
                <a data-ga-event="公共页面/footer/$text" href="http://www.xiachufang.com/contact/" target="_blank" title="联系我们">联系我们</a> &nbsp;
                <a href="http://www.xiachufang.com/auth/login/" title="意见反馈" rel="nofollow">意见反馈</a> &nbsp;
                <a data-ga-event="公共页面/footer/$text" href="http://www.xiachufang.com/privacy_policy/" target="_blank" title="隐私声明">隐私声明</a>
            </div>
            <div class="pure-u-1-4 align-right">
                <div class="social-likes">
                    <a href="https://weibo.com/xiachufang" target="_blank" rel="nofollow">
                        <img src="https://ohfnc0uzy.qnssl.com/simpleicons/sinaweibo.svg" alt="微博" title="微博">
                    </a>
                    &nbsp;
                    <a href="https://twitter.com/xiachufang" target="_blank" rel="nofollow">
                        <img src="https://ohfnc0uzy.qnssl.com/simpleicons/twitter.svg" alt="Twitter" title="Twitter">
                    </a>
                </div>
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-3-4">
                Copyright &copy; meishiyuan.com &nbsp;
                <a href="http://www.miibeian.gov.cn" class="gray-link" target="_blank" rel="nofollow">京ICP备xxxxxxxxx号-1</a> &nbsp;
                京公网安备xxxxxxxxxxxx号
            </div>
            <div class="pure-u-1-4 align-right">
                唯有美食与爱不可辜负
            </div>
        </div>

    </div>
</div>


{{--菜谱分类下拉--}}
<script src="{{asset('home/js/jquery-bundle-f92c742e6d6c46814813.js')}}"></script>
<script src="{{asset('home/js/js-2013-anonymous-bundle-a2a728e532f859c762a5.js')}}"></script>
<script src="{{asset('home/js/js-2013-bundle-69abae1ec9e0f5b1130e.js')}}"></script>
{{--菜谱分类下拉--}}

<div id='color_timer'></div>



</body>

</html>
