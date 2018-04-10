@extends('home.layouts.app')

@section('title','我的厨房')
@section('content')
    <div class="page-outer">
        <!--begin of page-container-->
        <div class="page-container">
            <div class="pure-g pb40">
                <!-- left avatar -->
                <div class="pure-u-5-24 people-base-left avatar">
                    {{--<img src="/home/images/touxiang.png" alt="">--}}
                    <img src="{{!empty(session()->get('userInfo')->face) ? '/uploads/'.session()->get('userInfo')->face : '/home/images/touxiang.png'}}" alt="" width="150" height="150">

                </div>
                <!-- left avatar -->

                <!-- middle info -->
                <div class="pure-u-5-8 font12 pr30">
                    <h1 class="page-title mb10">
                        {{session()->get('userInfo')->nickname}}
                    </h1>

                    <!-- basic info -->
                    <div class="gray-font">
                        <div>

                        <span class="mr10 display-inline-block">
                            @if (session('userInfo')->sex == 'x')
                                保密
                            @elseif (session('userInfo')->sex == 'm')
                                男
                            @else
                                女
                            @endif</span>

                            <span class="mr10 display-inline-block"><i class="icon-profile icon-profile-home"></i>{{session()->get('userInfo')->addr}}</span>

                            {{--<span class="mr10 display-inline-block"><i class="icon-profile icon-profile-location"></i>广东,东莞</span>--}}

                            {{--<span class="mr10 display-inline-block"><i class="icon-profile icon-profile-job"></i>编辑</span>--}}

                            <span class="display-inline-block">{{session()->get('userInfo')->created_at}}加入</span>
                        </div>
                        <div>

                        </div>
                    </div>
                    <!-- basic info -->

                    <!-- desc -->
                    <div class="people-base-desc dark-gray-font mt10"></div>
                    <!-- desc -->
                </div>
                <!-- middle info -->

                <!-- right extra -->
                <div class="pure-u-1-6 align-center people-base-right pos-r">
                    <div class="people-base-follow">
                        <a href="{{url('home/details')}}" class="gray-link font12">设置个人信息</a>
                    </div>
                    <div class="follow-wrap block-bg p10 pl15 pr15 pure-g w100">
                        <div class="pure-u-1-2 following-num">
                            <div class="font12 dark-gray-font mb10">关注的人</div>
                            <div><a href="javascript:void(0);" class="bold font16">1</a></div>
                        </div>
                        <div class="pure-u-1-2">
                            <div class="font12 dark-gray-font mb10">被关注</div>
                            <div><a href="javascript:void(0);" class="bold font16">0</a></div>
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
                    </ul>
                </div>

            </div>


            <!-- people profile nav -->






            <div class="people-home-main">
                <!-- collected recipes section -->
                <div class="people-created-main">
                    <div class="mb25">
                        <div class="float-right"><a href="{{url('/recipe/create')}}" class="button p10 pt10 pb10">+ 创建菜谱</a></div>

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
                                                    <a href="/recipe/{{$vv->id}}/edit" class="layui-btn-primary layui-btn-xm"><i class="layui-icon">&#xe642;</i></a>
                                            <a href="/recipe/{{$vv->id}}/delete" class="layui-btn-primary layui-btn-xm am-del"><i class="layui-icon">&#xe640;</i></a>

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
