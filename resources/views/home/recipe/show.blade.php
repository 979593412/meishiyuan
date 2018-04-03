@extends('home.layouts.app')

@section('title','创建菜谱-美食源')

@section('content')

    @if($recipe['status'] !=1  || $warning )
        该菜谱不存在或因不可描述的原因，已经被禁止显示。
    @else
    <link href="{{asset('home/recipe/css/a0d38c4e16dbe8c3c784.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('home/recipe/css/903136eae9bc67d92869.css')}}" rel="stylesheet" type="text/css">


    <div class="page-outer">
        <!--begin of page-container-->
        <div class="page-container">
            <ol class="breadcrumb plain pl10" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                    class="">
                    <a href="http://www.xiachufang.com/" title="首页">
                        首页
                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                    class="">
                    <a href="http://www.xiachufang.com/category/40076/" title="家常菜">
                        家常菜
                    </a>
                    <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                    class="active">
				<span>
					红烧排骨
				</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
            <div class="pure-g">
                <!-- begin of main-panel -->
                <div class="pure-u-2-3 main-panel">
                    <!-- begin of recipe -->
                    <div itemscope="" itemtype="http://schema.org/Recipe">
                        <h1 class="page-title" itemprop="name">
                            {{$recipe->title}}
                        </h1>
                        <div class="block recipe-show">
                            <div class="cover image expandable block-negative-margin" style="background-image: url('/home/recipe/upload/{{$recipe->pic}}')">
                                <img src="{{public_path('home/recipe/upload/'.$recipe->pic)}}" alt="{{$recipe->title}}" itemprop="image" width="660">
                            </div>
                            <div class="container pos-r pb20 has-bottom-border">
                                <div class="stats clearfix">
                                    <div class="score float-left" itemprop="aggregateRating" itemscope=""
                                         itemtype="http://schema.org/aggregateRating">
									<span class="number" itemprop="ratingValue">
										8.2
									</span>
                                        <meta itemprop="bestRating" content="10">
                                        <meta itemprop="ratingCount" content="2721">
                                        <span class="title">
										综合评分
									</span>
                                    </div>
                                    <div class="cooked float-left">
									<span class="number">
										7659
									</span>
                                        <span class="title">
										人做过这道菜
									</span>
                                    </div>
                                </div>
                                <div class="collect pure-g align-right">
                                    <a href="#" class="button large-button collect-button"
                                       rel="nofollow">
                                        收藏
                                    </a>
                                </div>
                            </div>
                            <div class="rate-dialog block-negative-margin">
                            </div>
                            <div class="author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                <a href="{{url('home/chufang')}}" title="{{$user->Details->nickname}}的厨房" class="avatar-link avatar">
                                    <img src="{{!empty(session()->get('userInfo')->face) ? '/uploads/'.session()->get('userInfo')->face : '/home/images/face.png'}}" alt="{{$user->nickname}}" width="60" height="60">
                                    &nbsp;
                                    <span itemprop="name">
									{{$user->Details->nickname}}
								</span>
                                </a>
                            </div>
                            <div class="desc mt30" itemprop="description">
                                {{$recipe->content}}
                            </div>
                            <h2>
                                用料 &nbsp;
                            </h2>
                            <div class="ings">
                                <table>
                                    <tbody>
                                    @for($i = 0; $i < count($food); $i++)
                                        @if(!empty($dosage[$i]))
                                            <tr itemprop="recipeIngredient">
                                                <td class="name">
                                                    <a href="http://www.xiachufang.com/category/227/">
                                                        {{$food[$i]}}
                                                    </a>
                                                </td>
                                                <td class="unit">
                                                    {{$dosage[$i]}}
                                                </td>
                                            </tr>
                                        @endif
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                            <h2 id="steps">
                                {{$recipe->title}}的做法 &nbsp;
                            </h2>
                            <div class="steps">
                                <ol>
                                    @for($i = 0; $i < count($step); $i++)
                                        @if(!empty($step[$i]))
                                            <li class="container" itemprop="recipeInstructions">
                                                <p class="text" style="width: 100%;">
                                                    {{$step[$i]}}
                                                </p>
                                            </li>
                                        @endif
                                    @endfor
                                </ol>
                            </div>
                            <div class="tip-container">
                                <h2>
                                    小贴士
                                </h2>
                                <div class="tip">
                                    {{$recipe->tip}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of recipe -->
                </div>
                <!-- end of main-panel -->
            </div>
            <!-- begin of recipe-stats -->
            <div class="recipe-stats block normal-font gray-font">
                <div class="time">
                    该菜谱创建于
                    <span itemprop="datePublished">
					{{$recipe->created_at}}
				</span>
                </div>
                <div class="pv">
                    319997 收藏
                </div>
                <div class="copyright">
                    版权归作者所有，没有作者本人的书面许可任何人不得转载或使用整体或任何部分的内容。
                </div>
                <br>
            </div>
            <!-- end of recipe-stats -->
        </div>
        <!-- end of page-container -->
    </div>
    @endif

@endsection