
@extends('home.layouts.app')

@section('title','我的厨房')
@section('content')
    <div class="popup-layer">



        <div class="reveal-modal-bg"></div>


        <div class="reveal-modal large normal-font" id="feedbackModal">

            <div class="reveal-modal-title-bar">
                <div class="reveal-modal-title">意见反馈</div>
                <a href="javascript:void(0)" class="close-reveal-modal" rel="nofollow"></a>
            </div>
            <div class="reveal-modal-main">


                <form action="https://www.xiachufang.com/feedback/create/" method="POST">
                    <textarea name="feedback" rows="3"></textarea>
                    <input type="hidden" name="xf" value="None">
                    <input type="submit" value="提交" class="button">
                </form>


            </div>

        </div>



        <div class="dish-popup-bg"></div>
        <div class="dish-popup" id="dishPopup">
            <div class="dish-popup-close"><img src="../../pic/2013/dish_close.gif" width="64" height="64"></div>
            <div class="content page-container pure-g"></div>
        </div>

        <div id="report-modal"></div>

    </div>

    <div class="topbar-outer has-bottom-border">
        <div class="topbar-container">
            <div class="topbar">




                <div class="pure-g">
                    <div class="pure-u-1-6">
                        <a href="https://www.xiachufang.com/" class="logo">下厨房</a>
                    </div>
                    <div class="pure-u-5-6">
                        <div class="float-left">
                            <form class="search" action="https://www.xiachufang.com/search/">
                                <input type="text" name="keyword" class="typeahead float-left" value="" placeholder="搜索菜谱、食材">
                                <input type="hidden" name="cat" value="1001">
                                <input type="submit" value="搜菜谱" class="button float-left">
                            </form>
                        </div>
                        <div class="float-left">
                            <ul class="site-nav plain pure-g">
                                <li class="pure-u"><a href="https://www.xiachufang.com/" data-ga-event="公共页面/导航栏/$text">首页</a></li>

                                <li class="topbar-cats pure-u">
                                    <a href="https://www.xiachufang.com/category/" class="block-link" data-ga-event="公共页面/导航栏/$text"><span>菜谱分类</span></a>
                                    <div class="topbar-cats-submenu hidden">
                                        <div class="topbar-cats-submenu-bg">


                                            <ul class="plain">
                                                <li class='topbar-cat-head'>常用主题</li>
                                                <li><a href="https://www.xiachufang.com/category/40076/" title="家常菜菜谱大全" data-ga-event="公共页面/导航栏/$text">家常菜</a></li>
                                                <li><a href="https://www.xiachufang.com/category/40077/" title="快手菜菜谱大全" data-ga-event="公共页面/导航栏/$text">快手菜</a></li>
                                                <li><a href="https://www.xiachufang.com/category/40078/" title="下饭菜菜谱大全" data-ga-event="公共页面/导航栏/$text">下饭菜</a></li>
                                                <li><a href="https://www.xiachufang.com/category/40071/" title="早餐菜谱大全" data-ga-event="公共页面/导航栏/$text">早餐</a></li>
                                                <li><a href="https://www.xiachufang.com/category/30048/" title="减肥菜谱大全" data-ga-event="公共页面/导航栏/$text">减肥</a></li>
                                                <li><a href="https://www.xiachufang.com/category/20130/" title="汤羹菜谱大全" data-ga-event="公共页面/导航栏/$text">汤羹</a></li>
                                                <li><a href="https://www.xiachufang.com/category/51761/" title="烘焙菜谱大全" data-ga-event="公共页面/导航栏/$text">烘焙</a></li>
                                                <li><a href="https://www.xiachufang.com/category/40073/" title="小吃菜谱大全" data-ga-event="公共页面/导航栏/$text">小吃</a></li>
                                            </ul>
                                            <ul class="plain">
                                                <li class='topbar-cat-head'>常见食材</li>
                                                <li><a href="https://www.xiachufang.com/category/731/" title="猪肉做法大全" data-ga-event="公共页面/导航栏/$text">猪肉</a></li>
                                                <li><a href="https://www.xiachufang.com/category/1136/" title="鸡肉做法大全" data-ga-event="公共页面/导航栏/$text">鸡肉</a></li>
                                                <li><a href="https://www.xiachufang.com/category/1445/" title="牛肉做法大全" data-ga-event="公共页面/导航栏/$text">牛肉</a></li>
                                                <li><a href="https://www.xiachufang.com/category/957/" title="鱼做法大全" data-ga-event="公共页面/导航栏/$text">鱼</a></li>
                                                <li><a href="https://www.xiachufang.com/category/394/" title="鸡蛋做法大全" data-ga-event="公共页面/导航栏/$text">鸡蛋</a></li>
                                                <li><a href="https://www.xiachufang.com/category/206/" title="土豆做法大全" data-ga-event="公共页面/导航栏/$text">土豆</a></li>
                                                <li><a href="https://www.xiachufang.com/category/178/" title="茄子做法大全" data-ga-event="公共页面/导航栏/$text">茄子</a></li>
                                                <li><a href="https://www.xiachufang.com/category/80/" title="豆腐做法大全" data-ga-event="公共页面/导航栏/$text">豆腐</a></li>
                                            </ul>
                                            <ul class="plain">
                                                <li class='topbar-cat-head'>时令食材</li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/21/" title="鲍鱼做法大全" data-ga-event="公共页面/导航栏/$text">鲍鱼</a>
                                                    <span class="topbar-cat-score">
                        10.0
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/3362/" title="海虾做法大全" data-ga-event="公共页面/导航栏/$text">海虾</a>
                                                    <span class="topbar-cat-score">
                        10.0
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/1495/" title="海参做法大全" data-ga-event="公共页面/导航栏/$text">海参</a>
                                                    <span class="topbar-cat-score">
                        10.0
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/141/" title="冬笋做法大全" data-ga-event="公共页面/导航栏/$text">冬笋</a>
                                                    <span class="topbar-cat-score">
                        9.9
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/145/" title="羊排做法大全" data-ga-event="公共页面/导航栏/$text">羊排</a>
                                                    <span class="topbar-cat-score">
                        9.9
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/692/" title="马蹄做法大全" data-ga-event="公共页面/导航栏/$text">马蹄</a>
                                                    <span class="topbar-cat-score">
                        9.9
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/833/" title="蓝莓做法大全" data-ga-event="公共页面/导航栏/$text">蓝莓</a>
                                                    <span class="topbar-cat-score">
                        9.9
                    </span>
                                                </li>
                                                <li>
                                                    <a href="https://www.xiachufang.com/category/2918/" title="龙虾做法大全" data-ga-event="公共页面/导航栏/$text">龙虾</a>
                                                    <span class="topbar-cat-score">
                        9.9
                    </span>
                                                </li>
                                            </ul>
                                            <div class="topbar-cats-submenu-bottom"><a href="https://www.xiachufang.com/category/" data-ga-event="公共页面/导航栏/$text">查看全部分类</a></div>

                                        </div>
                                    </div>
                                </li>
                                <li class="pure-u"><a href="https://www.xiachufang.com/explore/menu/collect/" data-ga-event="公共页面/导航栏/$text">菜单</a></li>
                                <li class="pure-u"><a href="https://www.xiachufang.com/activity/" data-ga-event="公共页面/导航栏/$text">作品动态</a></li>
                            </ul>
                        </div>
                        <div class="float-right clearfix">

                            <div class="user-action">
                                <a href="https://www.xiachufang.com/auth/login/" data-ga-event="公共页面/导航栏/$text">登录</a>&nbsp;&nbsp;
                                <a href="https://www.xiachufang.com/auth/apply/" data-ga-event="公共页面/导航栏/$text">注册</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="page-outer">
        <!--begin of page-container-->
        <div class="page-container">


            <div class="pure-g pb40">
                <!-- left avatar -->
                <div class="pure-u-5-24 people-base-left avatar">
                    <img src="/home/images/touxiang.png" alt="手机用户1903_nqcp的厨房">
                </div>
                <!-- left avatar -->











                <!-- middle info   概况 -->
                @foreach($user as $v)
                    <div class="pure-u-5-8 font12 pr30">
                        <h1 class="page-title mb10">
                            {{$v->username}}
                        </h1>

                        <!-- basic info -->
                        <div class="gray-font">
                            <div>

                                <span class="display-inline-block">{{$v->updated_at}}加入</span>
                            </div>
                            <div>

                            </div>
                        </div>
                        <!-- basic info -->

                        <!-- desc -->
                        <div class="people-base-desc dark-gray-font mt10"></div>
                        <!-- desc -->
                    </div>
            @endforeach
            <!-- middle 概况结束 info -->










                <!-- right extra -->
                <div class="pure-u-1-6 align-center people-base-right pos-r">
                    <div class="people-base-follow">
                        <a class="button large-button follow-button" href="https://www.xiachufang.com/auth/login/">关注</a>
                    </div>
                    <div class="follow-wrap block-bg p10 pl15 pr15 pure-g w100">
                        <div class="pure-u-1-2 following-num">
                            <div class="font12 dark-gray-font mb10">关注的人</div>
                            <div><a href="https://www.xiachufang.com/cook/126629567/following_users/" class="bold font16">0</a></div>
                        </div>
                        <div class="pure-u-1-2">
                            <div class="font12 dark-gray-font mb10">被关注</div>
                            <div><a href="https://www.xiachufang.com/cook/126629567/followers/" class="bold font16">0</a></div>
                        </div>
                    </div>
                </div>
                <!-- right extra -->
            </div>

            <!-- people profile nav -->
            <div class="mb35">

                <div class="tab-bar pure-g" id="">

                    <ul class="plain pure-g">
                        <li class=" ">
                            <a href="{{url('/home/chufang')}}">
                                <span>概况</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{url('/home/chufang/caipu')}}">
                                <span>菜谱</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('/home/chufang/zuopin')}}">
                                <span>作品</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('/home/chufang/caidan')}}">
                                <span>菜单</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('/home/chufang/liuyanban')}}">
                                <span>留言板</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- people profile nav -->

            {{----------------------------------------------------------------------------------------------}}

            {{--------------------------------------------------------------------------------------------------}}

        </div>
        <!-- end of page-container -->
    </div>

    <div class="bottom-outer">
        <div class="bottom-container">

        </div>
    </div>



    <div class="footer-outer">
        <div class="footer-container">


            <div class="bottom-ad">

                <script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '3543566',
                            container: s,
                            size: '1000,90',
                            display: 'inlay-fix',
                            async: true
                        });
                    })();
                </script>

            </div>
            <div class="bottom-ad">
                <!-- 广告位：PC-底部-底通2 -->

                <script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '3543568',
                            container: s,
                            size: '1000,90',
                            display: 'inlay-fix',
                            async: true
                        });
                    })();
                </script>

@endsection
