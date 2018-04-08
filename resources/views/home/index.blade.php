
@extends('home.layouts.app')

@section('title','首页-美食源')

@section('topAd')

    <div class="page-top-ad">
        <!-- 广告位：PC-首页-顶通 -->
        @if(!empty($gg_t))
        <a href="{{$gg_t->url}}" alt="广告标题">
            <img src="/uploads/{{$gg_t->pic}}" alt="广告标题" style="width: 980px;height: 90px;">
        </a>
        @endif
    </div>
@endsection

@section('content')
<div class="pure-g">
    <div class="pure-u-2-3 main-panel">
        <div class="pure-g">
            <!-- left panel -->
            <div class="left-panel">
                {{--@section('cate')--}}
                    <?php $i = 0;?>
                    <ul class="plain homepage-cats">
                    @foreach($cates as $v)
                      <li class="homepage-cat-has-submenu homepage-cat<?php echo $i++?>">
                        @if(!empty($v->sub))
                        <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="/cate/{{$v->id}}">
                        @else
                        <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="/list/{{$v->id}}">
                        @endif
                          <i class="cat-icon"></i>
                          <span class="cat-name">{{$v->cname}}</span>
                          @if(!empty($v->sub))
                         <span style="color:#d0d0d0;">></span>
                          @endif
                        </a>
                          @if(!empty($v->sub))
                          <div class="homepage-cat-submenu hidden">
                                @foreach($v->sub as $n)
                              <div class="submenu-item clearfix pure-g bottom-line">
                                <div class="title pure-u-1-4">
                                  {{$n->cname}}
                                </div>
                                <div class="body pure-u-3-4 pure-g">
                                @foreach($n->sub as $a)
                                    <span class="pure-u-1-4"><a href="/list/{{$a->id}}">{{$a->cname}}</a></span>
                                @endforeach
                                </div>
                              </div>
                              @endforeach
                          </div>
                          @endif
                      </li>
                    @endforeach
                    </ul>
                {{--@show--}}

                <div class="mt30">
                    @if(!empty($gg_l))
                    <!-- 广告位：PC-首页-左侧 -->
                    <a href="{{$gg_l->url}}" alt="广告标题">
                        <img src="/uploads/{{$gg_l->pic}}" alt="广告标题" style="width: 120px; height: 600px;">
                    </a>
                        @endif
                </div>
            </div>
            <!-- end of left panel -->


            <!-- middle panel -->
            <div class="middle-panel">
                <!-- head line -->
                <div class="headline">
                    <div class="unslider headline-slider">
                        <ul>
                            {{-------------------------------轮播图-----------------}}
                            @foreach($lunbo as $v)
                            <li class="headline-recipe">
                                <a class="cover-image display-block" href="#" data-ga-event="首页/头条/第0个" title="菜谱标题" alt="菜谱标题">
                                    <img src="/uploads/{{$v->pic}}" alt="菜谱标题" width="490" height="260">
                            </a>
                            <a href="#" class="name">图片上的菜谱标题</a>
                            <div class="stats">
                                <a class="num" href="#">505 人收藏过这道菜</a>
                                <a class="author" href="#">by 我这里是作者名字</a>
                            </div>
                            </li>
                            @endforeach

                            {{----------------------------end of 轮播图----------------------------------}}
                        </ul>
                        <a class="history-headline-link icon" href="#"></a>
                    </div>
                </div>
                <!-- end of head line -->

                <!-- rising recipes -->
                <div class="rising-recipes block">
                    <div class="title-bar">
                        <h3 class="title">新秀菜谱</h3>
                        <div class="right-action"><a href="javascript:void(0)" class="icon left-arrow left-arrow-disable">&lt;</a><a href="javascript:void(0)" class="icon right-arrow">&gt;</a></div>
                    </div>
                    <div class="unslider rising-recipes-slider">
                        <ul class="plain">
                            <li>
                                <ul class="page-of-recipes">
                                    @foreach($three as $v)
                                    <li class="align-center white-bg">
                                        <a href="/recipe/{{$v->id}}" title="菜谱名称" class="recipe recipe-vertical recipe-150-vertical image-link plain display-block" data-log="">
                                            <div class="cover">
                                                <img src="/home/recipe/upload/{{$v->pic}}" alt="菜谱名称" width="150" height="90">
                                            </div>
                                            <div class="name ellipsis">{{$v->title}}</div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li>
                                <ul class="page-of-recipes">

                                    @foreach($six as $v)
                                    <li class="align-center white-bg">
                                        <a href="/recipe/{{$v->id}}" title="菜谱名称" class="recipe recipe-vertical recipe-150-vertical image-link plain display-block" data-log="">
                                            <div class="cover">
                                                <img src="/home/recipe/upload/{{$v->pic}}" alt="菜谱名称" width="150" height="90">
                                            </div>
                                            <div class="name ellipsis">{{$v->title}}</div>
                                        </a>
                                    </li>
                                    @endforeach
                                  
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- end of rising recipes -->

                <!-- pop recipes -->
                <div class="pop-recipes block">
                    <div class="title-bar">
                        <h3 class="title">最近流行</h3>
                    </div>
                    <ul class="plain">

                            @foreach($populer as $v)
                        <li>
                            <a href="/recipe/{{$v->id}}" title="菜谱标题" class="recipe image-link align-center has-border display-block"
                               data-ga-event="首页/流行菜谱/第0个" data-click-tracking-url="">
                                <div class="cover">
                                    <img src="/home/recipe/upload/{{$v->pic}}" alt="菜谱标题" width="235" height="138">
                                </div>
                                <div class="name font18">
                                    <span class="ellipsis">{{$v->title}}</span>
                                </div>
                                <div class="stats">
                                    <span class="ellipsis">{{$v->User->username}}</span> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span>{{$v->collect}}&nbsp;人收藏</span>
                                </div>
                            </a>
                        </li>
                            @endforeach

                    </ul>
                </div>

                <!-- end of pop recipes -->

            </div>
            <!-- end of middle panel -->

        </div>
    </div>

    <!-- right panel -->
    <div class="pure-u-1-3 right-panel">

        <!-- user info -->
        <div class="user-info">
            @if(empty(session()->get('user')))
                <div class="login">
                    <ul class="plain">
                        <li><a href="{{url('login')}}" class="button small-button"><i class="login-icon"></i>登录</a></li>
                        <li><a href="{{url('register')}}" class="button small-button"><i class="login-icon"></i>注册</a></li>
                    </ul>
                    <p style="font-size: 12px;font-weight:bold;color:#666; margin-top: 50px">您还未登录，许多功能无法使用</p>
                </div>
            @else
                <link href="{{asset('home/css/67c16999dd11dd346207.css')}}" rel="stylesheet" type="text/css">
                <link href="{{asset('home/css/83356e7a694c13c31234.css')}}" rel="stylesheet" type="text/css">
                <div class="avatar">
                    <a href="{{url('home/details')}}" class="image-link"><img src="{{!empty(session()->get('userInfo')->face) ? '/uploads/'.session()->get('userInfo')->face : '/home/images/face.png'}}" width="60" height="60"></a>
                </div>
                <div class="name">
                    <a href="{{url('home/chufang')}}">{{ empty(session()->get('userInfo')->nickname) ? session()->get('user')->username :session()->get('userInfo')->nickname}}的厨房</a>
                </div>
                <div class="stats">
                    0 收藏
                    &nbsp;|&nbsp;
                    0 作品
                    &nbsp;|&nbsp;
                    0 菜谱
                </div>
                <div class="action">
                    <a href="{{url('recipe/create')}}" class="button">创建菜谱</a>
                </div>
                <div class="report-link">
                    <a href="#">网上不良信息举报专区</a>
                </div>
            @endif
        </div>
        <!-- end of user info -->

        <!-- pop keywords -->
        <div class="pop-keywords">
            <div class="block">
                <div class="title-bar">
                    <div class="title">流行搜索</div>
                </div>
                <div class="pure-g">
                    <div class="pure-u-1-2 first-group">

                        <ol class="plain">

                            <li><span class="num">1</span><a href="/recipe/197"><span class="ellipsis">红烧排骨</span></a><i class="icon icon-keyword-equal"></i></li>

                            <li><span class="num">2</span><a href="/recipe/212"><span class="ellipsis">糖醋里脊</span></a><i class="icon icon-keyword-equal"></i></li>

                            <li><span class="num">3</span><a href="/recipe/202"><span class="ellipsis">红烧茄子</span></a><i class="icon icon-keyword-equal"></i></li>

                            <li><span class="num">4</span><a href="/recipe/213"><span class="ellipsis">蒜蓉丝瓜</span></a><i class="icon icon-keyword-up"></i></li>

                            <li><span class="num">5</span><a href="/recipe/197"><span class="ellipsis">排骨</span></a><i class="icon icon-keyword-up"></i></li>
                        </ol>
                    </div>
                    <div class="pure-u-1-2 second-group">
                        <ol class="plain">

                            <li><span class="num">6</span><a href="/recipe/211"><span class="ellipsis">宫保鸡丁</span></a><i class="icon icon-keyword-down"></i></li>

                            <li><span class="num">7</span><a href="/recipe/214"><span class="ellipsis">面条</span></a><i class="icon icon-keyword-up"></i></li>

                            <li><span class="num">8</span><a href="/recipe/215"><span class="ellipsis">三明治</span></a><i class="icon icon-keyword-up"></i></li>

                            <li><span class="num">9</span><a href="/recipe/216"><span class="ellipsis">包子</span></a><i class="icon icon-keyword-up"></i></li>

                            <li><span class="num">10</span><a href="/recipe/210"><span class="ellipsis">鱼香肉丝</span></a><i class="icon icon-keyword-down"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of pop keywords -->

        <!-- homepage ad -->
        @if(!empty($gg_r))
        @foreach($gg_r as $v)
        <div class="homepage-right-ad" style="position: relative">
            <div class="block right-ad" data-ga-event="首页/广告/右侧1">
                <!-- 广告位：首页右侧 -->
                <a href="{{$v->url}}" alt="广告标题">
                    <img src="/uploads/{{$v->pic}}" alt="广告标题" style="width: 300px;">
                </a>
            </div>
            <div style="background-color:rgba(0,0,0,0.5); width: 30px; height: 16px;font-size: 10px; position: absolute; bottom: 0px; color: #fefdff; "  >广告</div>

        </div>
        @endforeach
        @endif
        <!-- end of homepage ad -->

    </div>
    <!-- end of right panel -->
</div>
@endsection

