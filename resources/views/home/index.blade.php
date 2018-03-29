
@extends('home.layouts.app')

@section('title','美食源-首页')
@section('content')

<ul class="plain homepage-cats">
  <li class="homepage-cat-has-submenu homepage-cat0">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/40076/">
      <i class="cat-icon"></i>
      <span class="cat-name">家常菜</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat1">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/40077/">
      <i class="cat-icon"></i>
      <span class="cat-name">快手菜</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat2">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/40078/">
      <i class="cat-icon"></i>
      <span class="cat-name">下饭菜</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat3">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/40071/">
      <i class="cat-icon"></i>
      <span class="cat-name">早餐</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat4">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/?full=1#cat2478">
      <i class="cat-icon"></i>
      <span class="cat-name">肉</span>
      <i class="icon icon-cat-arrow"></i>
    </a>

      <div class="homepage-cat-submenu hidden">
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat731">猪肉</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/227/">排骨</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1304/">五花肉</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/3297/">里脊</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/792/">猪肉末</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/580/">瘦肉</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/423/">猪蹄</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/733/">猪肝</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat731">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat104">鸡</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1509/">鸡腿</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1261/">鸡翅</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1136/">鸡肉</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1337/">鸡爪</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/570/">土鸡</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/278/">三黄鸡</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1227/">鸡胗</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat104">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat1445">牛肉</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/612/">牛腩</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/2629/">肥牛</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/938/">牛排</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/479/">牛肉末</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/4619/">牛瘦肉</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/2915/">牛尾</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/808/">牛筋</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat1445">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat275">鸭</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1190/">鸭腿</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/2653/">鸭翅</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/374/">鸭胗</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/714/">鸭掌</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/115/">老鸭</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1081/">鸭脖</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/4068/">鸭舌</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat275">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g ">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat674">羊肉</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/3249/">羊腿</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/156/">羊肉片</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/145/">羊排</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1243/">羊蝎子</a></span>
            </div>
          </div>
      </div>
  </li>
  <li class="homepage-cat-has-submenu homepage-cat5">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/957/">
      <i class="cat-icon"></i>
      <span class="cat-name">鱼</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat6">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/?full=1#cat4616">
      <i class="cat-icon"></i>
      <span class="cat-name">蔬菜</span>
      <i class="icon icon-cat-arrow"></i>
    </a>

      <div class="homepage-cat-submenu hidden">
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat2485">果实类蔬菜</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/178/">茄子</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/718/">番茄</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/208/">玉米</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/455/">南瓜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/454/">丝瓜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/151/">冬瓜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1006403/">豆角</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat2485">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat2484">根茎蔬菜</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/206/">土豆</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/4359/">萝卜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/503/">藕</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/524/">山药</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/534/">笋</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/747/">红薯</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/886/">芋头</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat2484">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g bottom-line">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat2488">菌菇类</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/468/">香菇</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/443/">杏鲍菇</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/998/">金针菇</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1383/">木耳</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/416/">茶树菇</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1109/">猴头菇</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/175/">平菇</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat2488">更多</a></span>
            </div>
          </div>
          <div class="submenu-item clearfix pure-g ">

            <div class="title pure-u-1-4">
              <a href="http://www.xiachufang.com/category/?full=1#cat2486">叶类蔬菜</a>
            </div>
            <div class="body pure-u-3-4 pure-g">

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/918/">韭菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/211/">菠菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/622/">圆白菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/666/">油菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1176/">娃娃菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1213/">空心菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/1469/">油麦菜</a></span>

                <span class="pure-u-1-4"><a href="http://www.xiachufang.com/category/?full=1#cat2486">更多</a></span>
            </div>
          </div>
      </div>
  </li>
  <li class="homepage-cat-has-submenu homepage-cat7">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/394/">
      <i class="cat-icon"></i>
      <span class="cat-name">鸡蛋</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat8">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/20130/">
      <i class="cat-icon"></i>
      <span class="cat-name">汤羹</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat9">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/51761/">
      <i class="cat-icon"></i>
      <span class="cat-name">烘焙</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat10">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/51490/">
      <i class="cat-icon"></i>
      <span class="cat-name">主食</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat11">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/category/20133/">
      <i class="cat-icon"></i>
      <span class="cat-name">面</span>
    </a>

  </li>
  <li class="homepage-cat-has-submenu homepage-cat12">

    <a data-ga-event="首页/菜谱分类/$text" class="homepage-cat-name" href="http://www.xiachufang.com/special/vegetarian/">
      <i class="cat-icon"></i>
      <span class="cat-name">素食</span>
    </a>
    </li>

  <li class="homepage-cat-has-submenu homepage-cat18">

      </ul>
@endsection

