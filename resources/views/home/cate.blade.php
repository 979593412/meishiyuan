@extends('home.layouts.app')
@section('content')
<div class="page-outer">
    <!--begin of page-container-->
    <div class="page-container">
        <div class="category-container plain">
            <h1 class="page-title">
                分类浏览
            </h1>
            <div class="block-bg p40 font16">
                <div class="cates-list clearfix has-bottom-border pb20 mb20">
                    <div class="cates-list-info ml15 float-left">
                        <h3 class="font20 m0" id="cat4616">
                            {{$cate->cname}}类
                        </h3>
                    </div>
                    <div class="cates-list-all clearfix ">
                    @foreach($cates as $v)
                        <h4 class="font16" id="cat2485">
                            {{$v->cname}}
                        </h4>
                        <ul class=" has-bottom-border">
                          @foreach($v->sub as $k)
                            <li id="cat601">
                                <a href="/list/{{$k->id}}">
                                   {{$k->cname}}
                                </a>
                            </li>
                          @endforeach
                        </ul>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page-container -->
</div>
@endsection