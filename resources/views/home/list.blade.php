@extends('home.layouts.app')
@section('title','美食源-菜谱列表')

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

                <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="#">
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
                          <a href="#">{{$n->cname}}</a>
                        </div>
                        <div class="body pure-u-3-4 pure-g">
                        @foreach($n->sub as $a)
                            <span class="pure-u-1-4"><a href="#">{{$a->cname}}</a></span>
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
                        小吃
                    </h1>
                    <div class="mb30">
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
                    </div>
                    <img src="../../0682353c8ad911e6a9a10242ac110002_1536w_2048h.jpg" class="hidden"
                    />

                    <div class="normal-recipe-list">
                        <ul class="list">
                            @foreach($recipe as $v)
                            <li style="display: inline-block;float: left;width:750px">
                                <a href="#" class="recipe recipe-215-horizontal pure-g image-link display-block"
                                data-click-tracking-url="" data-expose-tracking-url="" target="_blank">
                                    <div class="cover pure-u">
                                        <img src="/home/recipe/upload/{{$v->pic}}"
                                        width="215" height="136" alt="无菜谱图片" />
                                    </div>
                                    <div class="info pure-u">
                                        <p class="name">
                                            {{$v->title}}
                                            <i class="exclusive-icon ml5">
                                            </i>
                                        </p>
                                        <p class="ing ellipsis">
                                            @if(!empty($v->Book_Food))
                                            <span class="score bold green-font">
                                                创建时间:&nbsp;
                                                {{$v->Book_Food->created_at}}
                                            </span>
                                            
                                            @endif
                                        </p>
                                        <p class="stats">
                                            综合评分&nbsp;
                                            <span class="score bold green-font">
                                                7.6
                                            </span>
                                        
                                        </p>
                                        <p class="author">
                                            <span href="/cook/102051900/" class="gray-font">
                                                {{$v->User->username}}
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
                    <div class="pager">
                        <span class="prev">
                            上一页
                        </span>
                        <span class="now">
                            1
                        </span>
                        <a href="https://www.xiachufang.com/category/40073/?page=2">
                            2
                        </a>
                        <a href="https://www.xiachufang.com/category/40073/?page=3">
                            3
                        </a>
                        <a href="https://www.xiachufang.com/category/40073/?page=4">
                            4
                        </a>
                        <a href="https://www.xiachufang.com/category/40073/?page=5">
                            5
                        </a>
                        ...
                        <a href="https://www.xiachufang.com/category/40073/?page=2" class="next">
                            下一页
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-panel-bottom">
        </div>
    </div>
    <!-- end of main-panel -->
</div>
<!-- end of page-container -->
@endsection
