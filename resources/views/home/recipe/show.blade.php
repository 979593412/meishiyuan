@extends('home.layouts.app')

@section('title','创建菜谱-美食源')

@section('content')


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
                                    <a href="javascript:void(0)" class="button large-button collect-button"
                                       rel="nofollow" data-track="https://track.xiachufang.com/?event=recipe_collect&amp;user_id=126629567&amp;recipe_id=9730&amp;recipe_ref=http%3A//www.xiachufang.com/category/40076/&amp;origin=web">
                                        收藏
                                    </a>
                                </div>
                            </div>
                            <div class="rate-dialog block-negative-margin">
                            </div>
                            <div class="author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                <a href="" title="圆猪猪的厨房" class="avatar-link avatar">
                                    <img src="{{asset('home/images/face.png')}}" alt="圆猪猪的厨房" width="60" height="60">
                                    &nbsp;
                                    <span itemprop="name">
									圆猪猪
								</span>
                                </a>
                            </div>
                            <div class="desc mt30" itemprop="description">
                                此菜味道香咸，排骨酥烂，色泽金红。一般人都可食用。适宜于气血不足，阴虚纳差者；湿热痰滞内蕴者慎服；肥胖、血脂较高者不宜多食。
                            </div>
                            <h2>
                                用料 &nbsp;
                            </h2>
                            <div class="ings">
                                <table>
                                    <tbody>
                                    <tr itemprop="recipeIngredient">
                                        <td class="name">
                                            <a href="http://www.xiachufang.com/category/227/">
                                                排骨
                                            </a>
                                        </td>
                                        <td class="unit">
                                            400克
                                        </td>
                                    </tr>
                                    <tr itemprop="recipeIngredient">
                                        <td class="name">
                                            <a href="http://www.xiachufang.com/category/227/">
                                                排骨
                                            </a>
                                        </td>
                                        <td class="unit">
                                            400克
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 id="steps">
                                红烧排骨的做法 &nbsp;
                            </h2>
                            <div class="steps">
                                <ol>
                                    <li class="container" itemprop="recipeInstructions">
                                        <p class="text" style="width: 100%;">
                                            锅内烧开水，放入斩件排骨氽烫至出血水，捞起洗净，沥净水备用
                                        </p>
                                    </li>
                                    <li class="container" itemprop="recipeInstructions">
                                        <p class="text" style="width: 100%;">
                                            锅内烧开水，放入斩件排骨氽烫至出血水，捞起洗净，沥净水备用
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <div class="tip-container">
                                <h2>
                                    小贴士
                                </h2>
                                <div class="tip">
                                    1.红烧菜用炒糖色的效果比用酱油上色要好看，而且味道也更好。但炒糖色的时侯，不要炒糊了，宁可色不够深，也不要炒的太长时间。
                                    <br>
                                    2.排骨最好选购肉比较多的，能带些肥肉更好味。
                                    <br>
                                    3.煮到最后时，汤汁越来越少，要不时的翻动一下排骨，让其均匀入味上色。
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
					2011-02-16 18:50:29
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


@endsection