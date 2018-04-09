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
                        <li class=" active">
                            <a href="/home/other_details/{{$details->uid}}">
                                <span>概况</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/home/other_details/caipu/{{$details->uid}}">
                                <span>菜谱</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/home/other_details/zuopin/{{$details->uid}}">
                                <span>作品</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>


            <!-- people profile nav -->





            <!-- people profile nav -->





            <div class="people-home-main">
                <!-- collected recipes section -->
                <div class="block">
                    <h3>{{$details->nickname}}收藏的菜谱</h3>

                    <div class="recipes-280-full-width-list">
                        <ul class="plain pure-g">
                            @if(!empty($res))

                                @foreach($res as $v)

                                    <li class="pure-u" style="margin: 10px;">

                                        <div class="recipe-280 white-bg">
                                            <div class="cover">
                                                <a href="#" title="" class="image-link" target="_blank"><img src="/home/recipe/upload/{{$v->pic}}" data-src="" alt="" width="280" height="216" class="unveiled"></a>
                                            </div>
                                            <p class="name ellipsis red-font">
                                                <a href="#" target="_blank">{{$v->title}}</a>
                                            </p>
                                        </div>
                                    </li>

                                @endforeach

                            @else
                                快去收藏吧
                            @endif




                        </ul>
                    </div>

                </div>
                <!-- collected recipes section -->

            </div>





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






@endsection
