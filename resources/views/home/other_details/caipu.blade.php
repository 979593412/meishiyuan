@extends('home.layouts.app')

@section('title','我的厨房')
@section('content')
    <div class="page-outer">
        <!--begin of page-container-->
        <div class="page-container">
            @include('home.other_details.layouts')

            <!-- people profile nav -->
            <div class="mb35">

                <div class="tab-bar pure-g" id="">

                    <ul class="plain pure-g">
                        <li class=" ">
                            <a href="/home/other_details/{{$details->uid}}">
                                <span>Ta的收藏</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/home/other_details/caipu/{{$details->uid}}">
                                <span>Ta的菜谱</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/home/other_details/zuopin/{{$details->uid}}">
                                <span>Ta的作品</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>


            <!-- people profile nav -->






            <div class="people-home-main">
                <!-- collected recipes section -->
                <div class="people-created-main">
                    <div class="mb25">
                        <div class="float-right"><a href="{{url('/recipe/create')}}" class="button p15 pt10 pb10">+ 创建菜谱</a></div>

                    </div>
                </div>
                <div class="block">


                    <div class="recipes-280-full-width-list">
                        <ul class="plain pure-g">
                            @if(!empty($res))
                            @foreach($res as $v)
                                @foreach($v->Cook_book as $vv)
                                <li class="pure-u" style="margin: 10px;">
                                            <input type="hidden" value="{{$vv->id}}">
                                            <div class="recipe-280 white-bg">
                                                <div class="cover">
                                                    <a href="/recipe/{{$vv->id}}" title="" class="image-link" target="_blank"><img src="/home/recipe/upload/{{$vv->pic}}" data-src="" alt="" width="280" height="216" class="unveiled"></a>
                                                </div>
                                                <p class="name ellipsis red-font">
                                                    <a href="" target="_blank">{{$vv->title}}</a>
                                                </p>
                                                <div class="stats ellipsis">
                                                    {{$vv->created_at}}

                                        </div>
                                    </div>
                                </li>
                                    @endforeach
                            @endforeach
                        </ul>
                    </div>

                </div>
                <!-- collected recipes section -->
            </div>

            @else


            <div class="people-created-main">
                <div class="mb25">
                    <div class="float-right"><a href="{{url('/recipe/create')}}" class="button p15 pt10 pb10">+ 创建菜谱</a></div>
                    <div class="align-center p40">你还没有创建任何菜谱，快和厨友们分享一下自己的拿手好菜吧</div>
                </div>
            </div>
                @endif





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
                </script><div id="_7wzm9jbakkbt5dquw3j6ob6gvi"></div>

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
                </script><div id="_j69uk013pezwhc67tjyr885mi"></div>

            </div>

            <script>

                $('.am-del').click(function(){
                    var id = $(this).parents('.pure-u').children().eq(0).val();
                    var li = $(this).parents('.pure-u');
                    layui.use('layer', function(){
                        var layer = layui.layer;

                        var flag = layer.confirm('您确定要删除该菜谱吗？', {
                            btn: ['确定','点错了'] //按钮
                        }, function(){
                            $.get('{{url('/recipe/delete')}}',{id:id},function(data){
                                if(data){
                                    li.remove();
                                    layer.msg('删除成功', {icon: 1},{time:1000});
                                }else{
                                    layer.msg('删除失败', {icon: 2},{time:1000});
                                }
                            });


                        }, function(){
                            layer.msg('取消删除', {icon: 6},{time:1000});
                        });
                    });
                    return false;
                })

            </script>




@endsection
