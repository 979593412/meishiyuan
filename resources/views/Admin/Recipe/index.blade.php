@extends('Admin.layout')
@section('title','菜谱管理')
@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 栏目名称</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">商品列表</a></dl>

            <dl>
                <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> 添加产品</button>
            </dl>


        </div>

        <div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
            <ul>
                <li>
                    <div class="am-btn-group am-btn-group-xs">
                        <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
                            <option value="cname">菜谱分类</option>
                            <option value="bname">菜谱名称</option>
                        </select>
                    </div>
                </li>
                <li><input type="text" class="am-form-field am-input-sm am-input-xm" placeholder="关键词搜索" /></li>
                <li><button type="button" class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: -1px;">搜索</button></li>
            </ul>
        </div>

        <form class="am-form am-g">
            <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
                <thead>
                <tr class="am-success">
                    <th class="table-id">ID</th>
                    <th class="table-title">标题</th>
                    <th class="table-type">类别</th>
                    <th class="table-date am-hide-sm-only">创建日期</th>
                    <th class="table-author am-hide-sm-only">是否显示</th>
                    <th width="163px" class="table-set">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recipe as $v)
                <tr align="center">
                    <td>{{$v->id}}</td>
                    <td><a href="#">{{$v->title}}</a></td>
                    <td>{{$v->cid}}</td>
                    <td class="am-hide-sm-only">{{$v->created_at}}</td>
                    <td class="am-hide-sm-only">
                        <i class="am-icon-check am-text-warning"></i>
                        {{--<i class="am-icon-close am-text-primary"></i>--}}
                    </td>
                    <td><div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <button class="am-btn am-btn-default am-btn-xs am-text-success am-round"><span class="am-icon-pencil-square-o"></span> </button>
                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-round"><span class="am-icon-trash-o"></span></button>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 删除</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 上架</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 下架</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 移动</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 移动</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>

            <ul class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>

        </form>

    </div>

@endsection