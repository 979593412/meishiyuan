@extends('home.layouts.app')
@section('title','美食源-菜谱列表')

@section('topAd')

    <div class="page-top-ad">
        @if(!empty($gg_t))
        <!-- 广告位：PC-首页-顶通 -->
        <a href="#" alt="广告标题">
            <img src="/uploads/{{$gg_t->pic}}" alt="广告标题" width="980" height="90">
        </a>
            @endif
    </div>
@endsection

@section('content')
<ol class="breadcrumb plain pl10">
    <li>
        <a href="#" title="首页">
            首页
        </a>
    </li>
    <li>
        <a href="#" title="全部分类">
            全部分类
        </a>
    </li>
    <li class="active">
        小吃
    </li>
</ol>
<div class="pure-g" style="width:1150px">
    <!-- begin of main-panel -->
    <div class="pure-u-2-3 main-panel">
        <div class="white-bg block">
            <div class="pure-g">
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

                <div class="pure-u-3-4 category-recipe-list" >
                    <h1 class="page-title">
                        {{$cate->cname}}
                    </h1>
                    <ul class="ing-tab tab plain">
                        <li class="active">相关菜谱</li>   
                    </ul>
   <!--                  <div class="mb30">
                        <span class="gray-font">
                            最受欢迎
                        </span>
                        &nbsp;|&nbsp;
                        <a href="https://www.xiachufang.com/category/40073/recent/">
                            最近流行
                        </a>
                        &nbsp;|&nbsp;
                        <a href="https://www.xiachufang.com/category/40073/time/">
                            评分
                        </a>
                    </div> -->
                    <img src="../../0682353c8ad911e6a9a10242ac110002_1536w_2048h.jpg" class="hidden"
                    />

                    <div class="normal-recipe-list">
                        <ul class="list">
                           @foreach($recipe as $k)
                            <li style="display: inline-block;float: left;width:750px">
                                <a href="/recipe/{{$k->id}}" class="recipe recipe-215-horizontal pure-g image-link display-block"
                                data-click-tracking-url="" data-expose-tracking-url="" target="_blank">
                                    <div class="cover pure-u">
                                        <img src="/home/recipe/upload/{{$k->pic}}"
                                        width="215" height="136" alt="无菜谱图片" />
                                    </div>
                                    <div class="info pure-u">
                                        <p class="name">
                                        {{$k->title}}
                                            <i class="exclusive-icon ml5">
                                            </i>
                                        </p>
                                        <p class="ing ellipsis">
                                            
                                            <span class="score bold green-font">
                                                创建时间:&nbsp;
                                             {{$k->created_at}}
                                            </span>
                                            
                                            
                                        </p>
                                        <p class="stats">
                                            综合评分&nbsp;
                                            <span class="score bold green-font">
                                                7.6
                                            </span>
                                        
                                        </p>
                                        <p class="author">
                                            <span href="/cook/102051900/" class="gray-font">
                                               {{$k->User->username}}
                                            </span>
                                            <span href="/feature/cook/master/" class="icon icon-cooker">
                                            </span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                      
                    </div>
                    <div class="pagination" >
                        {{ $recipe->links() }}
                    </div>
                    <style type="text/css">        #pull_right {
                            text-align: center;
                        }


                        .pull-right { /*float: right!important;*/
                        }


                        .pagination {
                            display: inline-block;
                            padding-left: 0;
                            margin: 20px 0;
                            border-radius: 4px;
                            float: right;
                        }


                        .pagination > li {
                            display: inline;
                        }


                        .pagination > li > a,
                        .pagination > li > span {
                            position: relative;
                            float: left;
                            padding: 6px 12px;
                            margin-left: -1px;
                            line-height: 1.42857143;
                            color: #428bca;
                            text-decoration: none;
                            background-color: #fff;
                            border: 1px solid #ddd;
                        }
                        .pagination > li:first-child > a,
                        .pagination > li:first-child > span {
                            margin-left: 0;
                            border-top-left-radius: 4px;
                            border-bottom-left-radius: 4px;
                        }
                        .pagination > li:last-child > a,
                        .pagination > li:last-child > span {
                            border-top-right-radius: 4px;
                            border-bottom-right-radius: 4px;
                        }
                        .pagination > li > a:hover,
                        .pagination > li > span:hover,
                        .pagination > li > a:focus,
                        .pagination > li > span:focus {
                            color: #2a6496;
                            background-color: #eee;
                            border-color: #ddd;
                        }
                        .pagination > .active > a,
                        .pagination > .active > span,
                        .pagination > .active > a:hover,
                        .pagination > .active > span:hover,
                        .pagination > .active > a:focus,
                        .pagination > .active > span:focus {
                            z-index: 2;
                            color: #fff;
                            cursor: default;
                            background-color: #428bca;
                            border-color: #428bca;
                        }
                        .pagination > .disabled > span,
                        .pagination > .disabled > span:hover,
                        .pagination > .disabled > span:focus,
                        .pagination > .disabled > a,
                        .pagination > .disabled > a:hover,
                        .pagination > .disabled > a:focus {
                            color: #777;
                            cursor: not-allowed;
                            background-color: #fff;
                            border-color: #ddd;
                        }
                        .clear {
                            clear: both;
                        }
                 </style>
                </div>
            </div>
        </div>
        <div id="main-panel-bottom">
        </div>
    </div>
    <!-- end of main-panel -->

    <!-- begin of right-panel -->
    <div class="pure-u-1-3 right-panel">
        <!-- homepage ad -->
        @if(!empty($gg_r))
            @foreach($gg_r as $v)
        <div class="homepage-right-ad" style="position: relative">
            <div class="block right-ad" data-ga-event="首页/广告/右侧1">
                <!-- 广告位：首页右侧 -->
                <a href="{{$v->url}}" alt="广告标题">
                    <img src="/uploads/{{$v->pic}}" alt="广告标题" style="width: 200px;">

                </a>
            </div>
            <div style="background-color:rgba(0,0,0,0.5); width: 30px; height: 16px;font-size: 10px; position: absolute; bottom: 0px; color: #fefdff; "  >广告</div>

        </div>
        @endforeach
    @endif

        <!-- end of homepage ad -->
    </div>
    <!-- end of right-panel -->

</div>
<!-- end of page-container -->
@endsection
