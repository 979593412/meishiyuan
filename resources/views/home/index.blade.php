
@extends('home.layouts.app')

@section('title','首页-美食源')
@section('content')
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
@endsection

