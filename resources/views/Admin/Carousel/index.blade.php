@extends('Admin.layout')

@section('title', '添加轮播图页')


@section('content')
  {{--上传图片--}}
<div class="am-popup am-popup-inner" id="my-popup">
  <div class="am-popup-hd">
    <h4 class="am-popup-title">添加轮播图</h4>
    <span data-am-modal-close
          class="am-close">&times;</span> </div>

  <div class="am-popup-bd">
    <form class="am-form tjlanmu" action="{{url('/admin/fenlei')}}" method="post" enctype="multipart/form-data">

      <div class="am-form-group am-cf">
        <div class="zuo">栏目图片：</div>
        <div class="you" style="height: 45px;">
          {{csrf_field()}}
          <input type="file" name="pic" id="doc-ipt-file-1">
          <p class="am-form-help">请选择要上传的文件...</p>
        </div>
      </div>

      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">产品图片：</div>--}}
        {{--<div class="you" style="height: 45px;">--}}
          {{--<div class="col-sm-9 big-photo" style="margin-left: auto">--}}
            {{--<div id="preview">--}}
              {{--<img id="imghead" border="0" src="/Admin/i/photo_icon.png" width="80" height="80" onclick="$('#previewImg').click();">--}}
            {{--</div>--}}
            {{--<input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="pic">--}}
            {{--<!-- <input id="uploaderInput" class="uploader__input" style="display: none;" type="file" accept="" multiple=""> -->--}}
          {{--</div>--}}
          {{--<p class="am-form-help" style="color: red">{{session('sh')}}</p>--}}
        {{--</div>--}}
      {{--</div>--}}

      <div class="am-form-group am-cf">
        <div class="you">
          <p>
            <br/>
            <br/>
            <button type="submit" class="am-btn am-btn-success am-radius">提交</button>
          </p>
        </div>
      </div>
    </form>
  </div>
</div>



{{--//修改页面--}}
{{--<div class="am-popup am-popup-inner" id="my-popups">--}}
  {{--<div class="am-popup-hd">--}}
    {{--<h4 class="am-popup-title">修改栏目名称</h4>--}}
    {{--<span data-am-modal-close class="am-close">&times;</span> </div>--}}
  {{--<div class="am-popup-bd">--}}
    {{--<form class="am-form tjlanmu">--}}
      {{--<div class="am-form-group">--}}
        {{--<div class="zuo">栏目名称：</div>--}}
        {{--<div class="you">--}}
          {{--<input type="email" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入标题">--}}
        {{--</div>--}}
      {{--</div>--}}
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
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">栏目图片：</div>--}}
        {{--<div class="you" style="height: 45px;">--}}
          {{--<input type="file" id="doc-ipt-file-1">--}}
          {{--<p class="am-form-help">请选择要上传的文件...</p>--}}
        {{--</div>--}}
      {{--</div>--}}

      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">简介：</div>--}}
        {{--<div class="you">--}}
          {{--<textarea class="" rows="2" id="doc-ta-1"></textarea>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">状态：</div>--}}
        {{--<div class="you" style="margin-top: 3px;">--}}
          {{--<label class="am-checkbox-inline">--}}
            {{--<input type="checkbox" value="option1">--}}
            {{--显示 </label>--}}
          {{--<label class="am-checkbox-inline">--}}
            {{--<input type="checkbox" value="option2">--}}
            {{--隐藏 </label>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="you">--}}
          {{--<p>--}}
            {{--<button type="submit" class="am-btn am-btn-success am-radius">提交</button>--}}
          {{--</p>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</form>--}}
  {{--</div>--}}
{{--</div>--}}






{{--<div class="am-popup am-popup-inner" id="my-popupss">--}}
  {{--<div class="am-popup-hd">--}}
    {{--<h4 class="am-popup-title">复制栏目</h4>--}}
    {{--<span data-am-modal-close class="am-close">&times;</span> </div>--}}
  {{--<div class="am-popup-bd">--}}
    {{--<form class="am-form tjlanmu">--}}


      {{--<div class="am-form-group">--}}
        {{--<div class="zuo">复制到：</div>--}}
        {{--<div class="you">--}}

          {{--<select data-am-selected="{btnWidth: 200, btnSize: 'sm', btnStyle: 'danger'}">--}}
            {{--<option value="a">Apple</option>--}}
            {{--<option value="b">Banana</option>--}}
            {{--<option value="o">Orange</option>--}}
            {{--<option value="m">Mango</option>--}}
          {{--</select>--}}
          {{--顶级栏目选默认--}}

        {{--</div>--}}
      {{--</div>--}}


      {{--<div class="am-form-group">--}}
        {{--<div class="zuo">新栏目名称：</div>--}}
        {{--<div class="you">--}}
          {{--<input type="email" class="am-input-sm" id="doc-ipt-email-1" placeholder="请输入标题">--}}
        {{--</div>--}}
      {{--</div>--}}
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
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">栏目图片：</div>--}}
        {{--<div class="you" style="height: 45px;">--}}
          {{--<input type="file" id="doc-ipt-file-1">--}}
          {{--<p class="am-form-help">请选择要上传的文件...</p>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">简介：</div>--}}
        {{--<div class="you">--}}
          {{--<textarea class="" rows="2" id="doc-ta-1"></textarea>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="zuo">状态：</div>--}}
        {{--<div class="you" style="margin-top: 3px;">--}}
          {{--<label class="am-checkbox-inline">--}}
            {{--<input type="checkbox" value="option1">--}}
            {{--显示 </label>--}}
          {{--<label class="am-checkbox-inline">--}}
            {{--<input type="checkbox" value="option2">--}}
            {{--隐藏 </label>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="am-form-group am-cf">--}}
        {{--<div class="you">--}}
          {{--<p>--}}
            {{--<button type="submit" class="am-btn am-btn-success am-radius">提交</button>--}}
          {{--</p>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</form>--}}
  {{--</div>--}}
{{--</div>--}}







<div class="admin-biaogelist">
  <div class="listbiaoti am-cf">
    <ul class="am-icon-flag on">
      用户评论
    </ul>
    <dl class="am-icon-home" style="float: right;">
      当前位置： 首页 > <a href="#">用户评论</a>
    </dl>
    <dl>
      <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus" data-am-modal="{target: '#my-popup'}"> 给商品添加评论</button>
    </dl>
    <!--data-am-modal="{target: '#my-popup'}" 弹出层 ID  弹出层 190行 开始  271行结束-->

  </div>

  <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
    <thead>
    <tr class="am-success">
      <th class="table-check"><input type="checkbox" /></th>
      <th class="table-id am-text-center">ID</th>
      <th class="table-title">图片名称</th>
      <th class="table-type">添加时间</th>
      <th class="table-author am-hide-sm-only">修改时间</th>
      <th width="125px" class="table-set">操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cc as $v)
      <tr>
        <td><input type="checkbox" /></td>
        <td class="am-text-center">{{$v->id}}</td>
        <td><a href="#">{{$v->pic}}</a></td>
        <td>{{$v->created_at}}</td>
        <td class="am-hide-sm-only">{{$v->updated_at}}</td>

        <td>
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              {{--<a class="am-btn am-btn-default am-btn-xs am-text-success am-round am-icon-file" data-am-modal="{target: '#my-popups'}" title="置顶（前台显示热门评论）"></a>--}}
              {{--<button class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" data-am-modal="{target: '#my-popups'}" title="添加（随机虚拟用户ID ）"><span class="am-icon-pencil-square-o" ></span></button>--}}
              <!-- 用按钮的时候 弹层 后缀需要加 问好 ？#的 时候才有效 真恶心 .html?# -->

              <form action="/admin/fenlei/{{$v->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-round"  title="删除"><span class="am-icon-trash-o"></span></button>
              </form>
            </div>
          </div>
        </td>
      </tr>

    @endforeach


    </tbody>


  </table>
    {{--<div class="am-btn-group am-btn-group-xs">--}}
      {{--<button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 上架</button>--}}
      {{--<button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 下架</button>--}}

    {{--</div>--}}
    {{ $cc->links() }}
  <hr />




  {{--<div class="foods">--}}
    {{--<ul>--}}
      {{--版权所有@2015--}}
    {{--</ul>--}}
    {{--<dl>--}}
      {{--<a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a>--}}
    {{--</dl>--}}
  {{--</div>--}}
@endsection