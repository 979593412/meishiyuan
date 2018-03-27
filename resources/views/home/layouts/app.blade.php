<!DOCTYPE html>

<html>

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
    <link href="{{asset('home/css/f97edcb6e2dbe6a5cca5.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

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

                            <li class="topbar-cats pure-u">
                                <a href="http://www.xiachufang.com/category/" class="block-link" data-ga-event="公共页面/导航栏/$text"><span>菜谱分类</span></a>
                                <div class="topbar-cats-submenu hidden">
                                    <div class="topbar-cats-submenu-bg">


                                        <ul class="plain">
                                            <li class='topbar-cat-head'>常用主题</li>
                                            <li><a href="http://www.xiachufang.com/category/40076/" title="家常菜菜谱大全" data-ga-event="公共页面/导航栏/$text">家常菜</a></li>
                                            <li><a href="http://www.xiachufang.com/category/40077/" title="快手菜菜谱大全" data-ga-event="公共页面/导航栏/$text">快手菜</a></li>
                                            <li><a href="http://www.xiachufang.com/category/40078/" title="下饭菜菜谱大全" data-ga-event="公共页面/导航栏/$text">下饭菜</a></li>
                                            <li><a href="http://www.xiachufang.com/category/40071/" title="早餐菜谱大全" data-ga-event="公共页面/导航栏/$text">早餐</a></li>
                                            <li><a href="http://www.xiachufang.com/category/30048/" title="减肥菜谱大全" data-ga-event="公共页面/导航栏/$text">减肥</a></li>
                                            <li><a href="http://www.xiachufang.com/category/20130/" title="汤羹菜谱大全" data-ga-event="公共页面/导航栏/$text">汤羹</a></li>
                                            <li><a href="http://www.xiachufang.com/category/51761/" title="烘焙菜谱大全" data-ga-event="公共页面/导航栏/$text">烘焙</a></li>
                                            <li><a href="http://www.xiachufang.com/category/40073/" title="小吃菜谱大全" data-ga-event="公共页面/导航栏/$text">小吃</a></li>
                                        </ul>
                                        <ul class="plain">
                                            <li class='topbar-cat-head'>常见食材</li>
                                            <li><a href="http://www.xiachufang.com/category/731/" title="猪肉做法大全" data-ga-event="公共页面/导航栏/$text">猪肉</a></li>
                                            <li><a href="http://www.xiachufang.com/category/1136/" title="鸡肉做法大全" data-ga-event="公共页面/导航栏/$text">鸡肉</a></li>
                                            <li><a href="http://www.xiachufang.com/category/1445/" title="牛肉做法大全" data-ga-event="公共页面/导航栏/$text">牛肉</a></li>
                                            <li><a href="http://www.xiachufang.com/category/957/" title="鱼做法大全" data-ga-event="公共页面/导航栏/$text">鱼</a></li>
                                            <li><a href="http://www.xiachufang.com/category/394/" title="鸡蛋做法大全" data-ga-event="公共页面/导航栏/$text">鸡蛋</a></li>
                                            <li><a href="http://www.xiachufang.com/category/206/" title="土豆做法大全" data-ga-event="公共页面/导航栏/$text">土豆</a></li>
                                            <li><a href="http://www.xiachufang.com/category/178/" title="茄子做法大全" data-ga-event="公共页面/导航栏/$text">茄子</a></li>
                                            <li><a href="http://www.xiachufang.com/category/80/" title="豆腐做法大全" data-ga-event="公共页面/导航栏/$text">豆腐</a></li>
                                        </ul>
                                        <ul class="plain">
                                            <li class='topbar-cat-head'>时令食材</li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/21/" title="鲍鱼做法大全" data-ga-event="公共页面/导航栏/$text">鲍鱼</a>
                                                <span class="topbar-cat-score">
                        10.0
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/3362/" title="海虾做法大全" data-ga-event="公共页面/导航栏/$text">海虾</a>
                                                <span class="topbar-cat-score">
                        10.0
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/1495/" title="海参做法大全" data-ga-event="公共页面/导航栏/$text">海参</a>
                                                <span class="topbar-cat-score">
                        10.0
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/141/" title="冬笋做法大全" data-ga-event="公共页面/导航栏/$text">冬笋</a>
                                                <span class="topbar-cat-score">
                        9.9
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/145/" title="羊排做法大全" data-ga-event="公共页面/导航栏/$text">羊排</a>
                                                <span class="topbar-cat-score">
                        9.9
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/692/" title="马蹄做法大全" data-ga-event="公共页面/导航栏/$text">马蹄</a>
                                                <span class="topbar-cat-score">
                        9.9
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/833/" title="蓝莓做法大全" data-ga-event="公共页面/导航栏/$text">蓝莓</a>
                                                <span class="topbar-cat-score">
                        9.9
                    </span>
                                            </li>
                                            <li>
                                                <a href="http://www.xiachufang.com/category/2918/" title="龙虾做法大全" data-ga-event="公共页面/导航栏/$text">龙虾</a>
                                                <span class="topbar-cat-score">
                        9.9
                    </span>
                                            </li>
                                        </ul>
                                        <div class="topbar-cats-submenu-bottom"><a href="http://www.xiachufang.com/category/" data-ga-event="公共页面/导航栏/$text">查看全部分类</a></div>

                                    </div>
                                </div>
                            </li>
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
                                        <a class="user-avatar avatar" href="#" data-ga-event="公共页面/导航栏/$text"><img src="{{asset('home/images/face.png')}}" alt="手机用户1903_nqcp的厨房" width="30" height="30"></a>
                                        <div class="user-nav-submenu hidden" style="display: none;">
                                            <ul class="plain">
                                                <li><a href="#" data-ga-event="公共页面/导航栏/$text">我的厨房</a></li>
                                                <li><a href="#" data-ga-event="公共页面/导航栏/$text">我的菜单</a></li>
                                                <li><a href="/home/details" data-ga-event="公共页面/导航栏/$text">帐号设置</a></li>
                                                <li><a href="#" data-ga-event="公共页面/导航栏/$text">发现好友</a></li>
                                                <li><a href="{{url('/login/outlogin')}}">退出</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="user-collect" href="#" title="我的收藏">
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

@section('content')

@show

<div class="bottom-outer">
    <div class="bottom-container">

    </div>
</div>



<div class="footer-outer">
    <div class="footer-container">

        <div class="pure-g buttons">
            <a href="http://www.xiachufang.com/page/join_market/" class="button">入驻下厨房市集</a>
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
                Copyright &copy; xiachufang.com &nbsp;
                <a href="http://www.miibeian.gov.cn" class="gray-link" target="_blank" rel="nofollow">京ICP备13009078号-1</a> &nbsp;
                京公网安备11010802022310号
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
