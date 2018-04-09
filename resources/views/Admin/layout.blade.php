<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="/Admin/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <script src="/Admin/js/jquery.min.js"></script>
    <script src="/Admin/js/app.js"></script>
    <style type="text/css">        #pull_right {
            text-align: center;
        }

        .pull-right { /*float: right!important;*/
        }

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
            float: right;
        }

        .pagination > li {
            display: inline;
        }

        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }

        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }

        .clear {
            clear: both;
        }
    </style>

    <script>
        //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
            var MAXWIDTH  = 80;
            var MAXHEIGHT = 80;
            var div = document.getElementById('preview');
            if (file.files && file.files[0])
            {
                div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
                var img = document.getElementById('imghead');
                img.onload = function(){
                    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                    img.width  =  rect.width;
                    img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                    img.style.marginTop = rect.top+'px';
                }
                var reader = new FileReader();
                reader.onload = function(evt){img.src = evt.target.result;}
                reader.readAsDataURL(file.files[0]);
            }
            else //兼容IE
            {
                var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
                file.select();
                var src = document.selection.createRange().text;
                div.innerHTML = '<img id=imghead>';
                var img = document.getElementById('imghead');
                img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
                div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
            }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight ){
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;

                if( rateWidth > rateHeight ){
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else{
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
    </script>

</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p>
<![endif]-->


</head>

<body>
<header class="am-topbar admin-header">
    <div class="am-topbar-brand"><img src="/Admin/i/logo.png"></div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

            <li class="am-dropdown tognzhi" data-am-dropdown>
                <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o"
                        data-am-dropdown-toggle> 消息管理<span class="am-badge am-badge-danger am-round">6</span></button>
                <ul class="am-dropdown-content">


                    <li class="am-dropdown-header">所有消息都在这里</li>


                    <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
                    <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
                    <li><a href="#">未处理汇款</a></li>
                    <li><a href="#">未发放提现</a></li>
                    <li><a href="#">未发货订单</a></li>
                    <li><a href="#">低库存产品</a></li>
                    <li><a href="#">信息反馈</a></li>


                </ul>
            </li>

            <li class="kuanjie">

                <a href="#">会员管理</a>
                <a href="#">奖金管理</a>
                <a href="#">订单管理</a>
                <a href="#">产品管理</a>
                <a href="#">个人中心</a>
                <a href="#">系统设置</a>
            </li>

            <li class="soso">

                <p>

                    <select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
                        <option value="b">全部</option>
                        <option value="o">产品</option>
                        <option value="o">会员</option>

                    </select>

                </p>

                <p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域"/></p>
                <p>
                    <button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button>
                </p>
            </li>


            <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span
                            class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">

    <div class="nav-navicon admin-main admin-sidebar">


        <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员： {{ session()->get('admin_user')->username }}</div>
        <br>
        <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"><a href="/admin/logins"> 退出</a></div>

        <div class="sideMenu">
            @if (session()->get('admin_user')->auth == 1)
            <h3 class="am-icon-users on"><em></em> <a href="#">用户管理</a></h3>
            <ul>
                @if (session()->get('admin_user')->auth == 1)
                <li><a href="{{url('/user/list')}}">后台用户列表</a></li>
                <li><a href="{{url('/quser/list')}}">前台用户列表</a></li>
                @else
                    <li><a href="{{url('/user/list')}}">后台用户列表</a></li>
                @endif
            </ul>
            <h3 class="am-icon-book on"><em></em> <a href="#">菜谱管理</a></h3>
            <ul>
                <li><a href="{{url('/admin/recipe')}}">菜谱列表</a></li>
            </ul>
            <h3 class="am-icon-flag"><em></em> <a href="#">菜谱分类管理</a></h3>
            <ul>
                <li><a href="{{ url('/admin/cate') }}">菜谱分类列表</a></li>
                <li><a href="{{ url('/admin/cate/create') }}">添加新分类</a></li>
            </ul>
            <h3 class="am-icon-users on"><em></em> <a href="#">附属模块</a></h3>
            <ul>
                <li><a href="/admin/fenlei">轮播图</a></li>
                <li><a href="/admin/home_ad">广告位</a></li>
                <li><a href="/admin/links">友情链接</a></li>
            </ul>
            @else
                <h3 class="am-icon-book on"><em></em> <a href="#">菜谱管理</a></h3>
                <ul>
                    <li><a href="{{url('/admin/recipe')}}">菜谱列表</a></li>
                </ul>
                <h3 class="am-icon-flag"><em></em> <a href="#">菜谱分类管理</a></h3>
                <ul>
                    <li><a href="{{ url('/admin/cate') }}">菜谱分类列表</a></li>
                    <li><a href="{{ url('/admin/cate/create') }}">添加新分类</a></li>
                </ul>
                <h3 class="am-icon-users on"><em></em> <a href="#">附属模块</a></h3>
                <ul>
                    <li><a href="/admin/fenlei">轮播图</a></li>
                    <li><a href="/admin/home_ad">广告位</a></li>
                    <li><a href="/admin/links">友情链接</a></li>
                </ul>
            @endif

        </div>
        <!-- sideMenu End -->

        <script type="text/javascript">
            jQuery(".sideMenu").slide({
                titCell: "h3", //鼠标触发对象
                targetCell: "ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
                effect: "slideDown", //targetCell下拉效果
                delayTime: 300, //效果时间
                triggerTime: 150, //鼠标延迟触发时间（默认150）
                defaultPlay: true,//默认是否执行效果（默认true）
                returnDefault: true //鼠标从.sideMen移走后返回默认状态（默认false）
            });
        </script>


    </div>

    <div class=" admin-content">

        <div class="daohang">
            <ul>
                <li>
                    <button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页
                </li>
                {{--<li>--}}
                    {{--<button type="button" class="am-btn am-btn-default am-radius am-btn-xs">帮助中心<a--}}
                                {{--href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a>--}}
                    {{--</button>--}}
                {{--</li>--}}
                @if(session('msg'))
                    {{ session('msg') }}
                @endif
                <li>
                    <button type="button" class="am-btn am-btn-default am-radius am-btn-xs" >修改密码
                        <a href="{{ url('/user/edit/'.session()->get('admin_user')->id) }}" class="am-close am-close-spin" data-am-modal-close="">X</a>
                    </button>
                </li>
                {{--<li>--}}
                    {{--<button type="button" class="am-btn am-btn-default am-radius am-btn-xs">产品管理<a--}}
                                {{--href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a>--}}
                    {{--</button>--}}
                {{--</li>--}}


            </ul>


        </div>


        <div class="am-popup am-popup-inner" id="my-popup">

            <div class="am-popup-hd">
                <h4 class="am-popup-title">添加商品一级分类</h4>
                <span data-am-modal-close
                      class="am-close">&times;</span>
            </div>

            <div class="am-popup-bd">


                <form class="am-form tjlanmu">


                    <div class="am-form-group">
                        <div class="zuo">栏目名称：</div>
                        <div class="you">
                            <input type="email" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入标题">
                        </div>
                    </div>
                    {{--<div class="am-form-group">--}}
                        {{--<div class="zuo">栏目关键词：</div>--}}
                        {{--<div class="you">--}}
                            {{--<input type="password" class="am-input-sm" id="doc-ipt-pwd-1" placeholder="请输入关键词">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="am-form-group am-cf">--}}
                        {{--<div class="zuo">栏目描述：</div>--}}
                        {{--<div class="you">--}}
                            {{--<textarea class="" rows="2" id="doc-ta-1"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="am-form-group am-cf">
                        <div class="zuo">栏目图片：</div>
                        <div class="you" style="height: 45px;">
                            <input type="file" id="doc-ipt-file-1">
                            <p class="am-form-help">请选择要上传的文件...</p>
                        </div>
                    </div>
                    {{--<div class="am-form-group am-cf">--}}
                        {{--<div class="zuo">简介：</div>--}}
                        {{--<div class="you">--}}
                            {{--<textarea class="" rows="2" id="doc-ta-1"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="am-form-group am-cf">
                        <div class="zuo">状态：</div>
                        <div class="you" style="margin-top: 3px;">
                            <label class="am-checkbox-inline">
                                <input type="checkbox" value="option1">
                                显示 </label>
                            <label class="am-checkbox-inline">
                                <input type="checkbox" value="option2">
                                隐藏 </label>

                        </div>
                    </div>
                    <div class="am-form-group am-cf">
                        <div class="you">
                            <p>
                                <button type="submit" class="am-btn am-btn-success am-radius">提交</button>
                            </p>
                        </div>
                    </div>
                </form>


            </div>


        </div>


        <div class="am-popup am-popup-inner" id="my-popups">

            <div class="am-popup-hd">
                <h4 class="am-popup-title">修改栏目名称</h4>
                <span data-am-modal-close
                      class="am-close">&times;</span>
            </div>

            <div class="am-popup-bd">


                <form class="am-form tjlanmu">


                    {{--<div class="am-form-group">--}}
                        {{--<div class="zuo">栏目名称：</div>--}}
                        {{--<div class="you">--}}
                            {{--<input type="email" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入标题">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="am-form-group">
                        <div class="zuo">栏目关键词：</div>
                        <div class="you">
                            <input type="password" class="am-input-sm" id="doc-ipt-pwd-1" placeholder="请输入关键词">
                        </div>
                    </div>
                    {{--<div class="am-form-group am-cf">--}}
                        {{--<div class="zuo">栏目描述：</div>--}}
                        {{--<div class="you">--}}
                            {{--<textarea class="" rows="2" id="doc-ta-1"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="am-form-group am-cf">--}}
                        {{--<div class="zuo">栏目图片：</div>--}}
                        {{--<div class="you" style="height: 45px;">--}}
                            {{--<input type="file" id="doc-ipt-file-1">--}}
                            {{--<p class="am-form-help">请选择要上传的文件...</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="am-form-group am-cf">
                        <div class="zuo">简介：</div>
                        <div class="you">
                            <textarea class="" rows="2" id="doc-ta-1"></textarea>
                        </div>
                    </div>
                    <div class="am-form-group am-cf">
                        <div class="zuo">状态：</div>
                        <div class="you" style="margin-top: 3px;">
                            <label class="am-checkbox-inline">
                                <input type="checkbox" value="option1">
                                显示 </label>
                            <label class="am-checkbox-inline">
                                <input type="checkbox" value="option2">
                                隐藏 </label>

                        </div>
                    </div>
                    <div class="am-form-group am-cf">
                        <div class="you">
                            <p>
                                <button type="submit" class="am-btn am-btn-success am-radius">提交</button>
                            </p>
                        </div>
                    </div>
                </form>


            </div>


        </div>


        @section('content')
            @show

    </div>


</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Admin/js/polyfill/rem.min.js"></script>
<script src="/Admin/js/polyfill/respond.min.js"></script>
<script src="/Admin/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Admin/js/amazeui.min.js"></script>
<!--<![endif]-->


</body>
</html>