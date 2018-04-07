@extends('Admin.layout')


@section('title', '广告位')

@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 栏目名称</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： <a href="{{url('Admin')}}">广告首页</a> > <a href="{{url('Admin')}}">添加页面</a></dl>



        </div>

        <div class="fbneirong">
            <form class="am-form" method="post" action="{{url('/admin/home_ad')}}" enctype="multipart/form-data">
                <div class="am-form-group am-cf">
                    <div class="zuo">广告url：</div>
                    <div class="you">
                        <input type="text" class="am-input-sm" id="doc-ipt-pwd-1" placeholder="请输入url" name="url" value="http://">
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">广告位置：</div>
                    <div class="you">
                        <select name="position" id="">
                            <option value="top">头部</option>
                            <option value="right" selected>右侧</option>
                            <option value="left">左侧</option>
                        </select>
                    </div>
                </div>

                {{--<div class="am-form-group am-cf">--}}
                    {{--<div class="zuo">产品图片：</div>--}}
                    {{--<div class="you" style="height: 45px;">--}}
                        {{--<input type="file" id="doc-ipt-file-1" name="pic">--}}
                        {{--<p class="am-form-help">请选择要上传的文件...</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="am-form-group am-cf">
                <div class="zuo">广告图片：</div>
                <div class="you" style="height: 45px;">
                    <div class="col-sm-9 big-photo" style="margin-left: auto">
                        <div id="preview">
                            <img id="imghead" border="0" src="/Admin/i/photo_icon.png" width="80" height="80" onclick="$('#previewImg').click();">
                        </div>
                        <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="pic">
                        <!-- <input id="uploaderInput" class="uploader__input" style="display: none;" type="file" accept="" multiple=""> -->
                    </div>
                <p class="am-form-help" style="color: #ff391d">{{session('sh')}}</p>
                </div>
                </div>


                {{ csrf_field() }}
                <div class="you" style="margin-left: 11%; margin-top: 6%">
                    <button type="submit" class="am-btn am-btn-success am-radius">发布</button>&nbsp;

                </div>
        </div>
        </form>
    </div>
@endsection