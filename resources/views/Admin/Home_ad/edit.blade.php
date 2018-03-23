@extends('Admin.layout')


@section('title', '广告位')

@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 栏目名称</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： <a href="{{url('Admin')}}">广告页</a> > <a href="#">修改</a></dl>



        </div>

        <div class="fbneirong">
            <form class="am-form" method="post" action="/admin/home_ad/{{$data->id}}" enctype="multipart/form-data">
                <div class="am-form-group am-cf">
                    <div class="zuo">广告url：</div>
                    <div class="you">
                        <input type="text" class="am-input-sm" id="doc-ipt-pwd-1" value="{{$data->url}}" name="url">
                    </div>
                </div>

                {{method_field('PUT')}}

                {{csrf_field()}}

                <div class="am-form-group am-cf">
                    <div class="zuo">产品图片：</div>
                    <div class="you" style="height: 45px;">
                        <input type="file" id="doc-ipt-file-1" name="pic" value="{{$data->pic}}">
                        <p class="am-form-help">请则要修改的图片...</p>
                    </div>
                </div>

                <div class="you" style="margin-left: 11%;">
                    <button type="submit" class="am-btn am-btn-success am-radius">修改</button>&nbsp;

                </div>
        </div>
        </form>
    </div>
@endsection