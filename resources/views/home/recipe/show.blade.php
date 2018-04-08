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

                                <div class="collect pure-g align-right " style="margin-top: -28px;">

                                   <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">收藏</div>
                                </div>


                            </div>
                            <div class="rate-dialog block-negative-margin">
                            </div>
                            <div class="author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                <a href="{{url('home/chufang')}}"  class="avatar-link avatar">
                                    <img src="{{!empty($user->Details->face) ? '/uploads/'.$user->Details->face : '/home/images/face.png'}}" width="60" height="60">
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
                                <!-- <div class="tip" id="bid">
                                    {{$recipe->id}}

                                </div>
                                <div class="tip" id="uid">
                                    {{$user->id}}

                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- end of recipe -->
                </div>
                <!-- end of main-panel -->

                <!-- begin of right-panel -->
                <div class="pure-u-1-3 right-panel">



                    <div class="page-title">&nbsp;</div>

                    @if(!empty($gg_t))
                        @foreach($gg_t as $v)

                    <div class="right-ad block mb50">
                        <div class="homepage-right-ad" style="position: relative">
                            <div class="block right-ad" data-ga-event="首页/广告/右侧1">
                                <!-- 广告位：菜谱详情右侧 -->
                                <a href="{{$v->url}}" alt="广告标题">
                                    <img src="/uploads/{{$v->pic}}" alt="广告标题" style="width: 300px;">

                                </a>
                            </div>
                            <div style="background-color:rgba(0,0,0,0.5); width: 30px; height: 16px;font-size: 10px; position: absolute; bottom: 0px; color: #fefdff; "  >广告</div>


                        </div>
                    </div>


                    @endforeach
                @endif




                    <!-- begin of recipe-tags -->
                    <div class="recipe-tags block mb50">
                        <div class="title-bar">
                            <h3 class="title">{{$recipe->title}}所在分类</h3>
                        </div>
                        <div class="content plain">
                            <div class="recipe-cats">
                                <a href="javascript:void(0);">{{$cname['cname']}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- end of recipe-tags -->


                    <!-- begin of pop subjects -->

                    <div class="block mb50">
                        <div class="title-bar">
                            <div class="title">随便看看</div>
                        </div>
                        <div class="pure-g content">
                            <div class="pure-u-1-2 first-group">
                                <ul class="list">
                                    @foreach($randRecipe as $v)
                                    <li><a href="/recipe/{{$v['id']}}" title="{{$v['title']}}的做法"><span class="ellipsis">{{$v['title']}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            {{--<div class="pure-u-1-2 second-group">--}}
                                {{--<ul class="list">--}}
                                    {{--<li><a href="javascript:void(0);" target="_blank"><span class="ellipsis">羊肉汤面</span></a></li>--}}
                                    {{--<li><a href="javascript:void(0);" target="_blank"><span class="ellipsis">香菇瘦肉粥</span></a></li>--}}
                                    {{--<li><a href="javascript:void(0);" target="_blank"><span class="ellipsis">萝卜条</span></a></li>--}}
                                    {{--<li><a href="javascript:void(0);" target="_blank"><span class="ellipsis">秋刀鱼</span></a></li>--}}
                                    {{--<li><a href="javascript:void(0);" target="_blank"><span class="ellipsis">芹菜炒鸡蛋</span></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!-- end of pop subjects -->
                    @if(!empty($gg_b))
                    <div class="right-ad block mb50">
                        <div class="homepage-right-ad" style="position: relative">
                            <div class="block right-ad" data-ga-event="首页/广告/右侧2">
                                <!-- 广告位：菜谱详情右侧 -->
                                <a href="{{$gg_b->url}}" alt="广告标题">
                                    <img src="/uploads/{{$gg_b->pic}}" alt="广告标题" width="300px">
                                </a>
                            </div>
                            <div style="background-color:rgba(0,0,0,0.5); width: 30px; height: 16px;font-size: 10px; position: absolute; bottom: 0px; color: #fefdff; "  >广告</div>

                        </div>
                    </div>
                    @endif
                    <div id="PdFP74wV" style="height: 0px; width: 300px;"></div><div class="fixed-scroller" data-interval="1000" style="z-index: 2; width: 300px;">

                        <!-- begin of recipe-stats -->
                        <input type="hidden" value="{{$recipe->id}}" name="" id="bid">
                        <input type="hidden" value="{{session()->get('user')->id}}" name="" id="uid">
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

                </div>
                <!-- end of right-panel -->

            </div>

        </div>
        <!-- end of page-container -->
    </div>

    @endif

    <script>


    var bid  = $('#bid').val();
    var uid  = $('#uid').val();


    $(document).ready(function()
    {

    $('body').on("click",'.heart',function()
    {

        var A=$(this).attr("id");
        var B=A.split("like");
        var messageID=B[1];
        var C=parseInt($("#likeCount"+messageID).html());
        $(this).css("background-position","")
        var D=$(this).attr("rel");

        if(D === 'like'){
            $.get('/home/add',{'bid':bid,'uid':uid},function(data){
                console.log(data);
            })
            $("#likeCount"+messageID).html('取消收藏');
            $(this).addClass("heartAnimation").attr("rel","unlike");

        }
        else{
             $.get('/home/delete',{'bid':bid,'uid':uid},function(data){
                console.log(data);
            })
            $("#likeCount"+messageID).html('收藏');
            $(this).removeClass("heartAnimation").attr("rel","like");
            $(this).css("background-position","left");
        }


    });


    });

    </script>
@endsection