@extends('Admin.layout')


@section('title', '广告位')

@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 修改广告</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： <a href="{{url('admin/home_ad')}}">广告页</a> > <a href="#">修改</a></dl>



        </div>

        <div class="fbneirong">
            <form class="am-form" method="post" action="/admin/home_ad/{{$data->id}}" enctype="multipart/form-data">
                <div class="am-form-group am-cf">
                    <div class="zuo">广告url：</div>
                    <div class="you">
                        <input type="text" class="am-input-sm" id="doc-ipt-pwd-1" value="{{$data->url}}" name="url">
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">广告位置：</div>
                    <div class="you">
                        <select name="position" id="">
                            <option value="top" {{($data->position == 'top')? 'selected' : ''}}>头部</option>
                            <option value="right" {{($data->position == 'right')? 'selected' : ''}}>主页右侧</option>
                            <option value="left" {{($data->position == 'left')? 'selected' : ''}}>主页左侧</option>
                            <option value="list_right" {{($data->position == 'list_right')? 'selected' : ''}}>列表右侧</option>
                            <option value="recipe_t" {{($data->position == 'left')? 'recipe_t' : ''}}>详情上2</option>
                            <option value="recipe_b" {{($data->position == 'recipe_b')? 'selected' : ''}}>详情下1</option>
                        </select>
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