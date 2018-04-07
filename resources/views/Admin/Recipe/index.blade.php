@extends('Admin.layout')
@section('title','菜谱管理')
@section('content')
    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}"  media="all">
    <script src="{{asset('layui/layui.js')}}" charset="utf-8"></script>
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on">菜谱管理</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">菜谱列表</a></dl>

        </div>

        <form action="{{url('/admin/recipe')}}" method="post">
            {{csrf_field()}}
        <div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
            <ul>
                <li>
                    <div class="am-btn-group am-btn-group-xs">
                        <label style="height: 30px;font-size: 18px"> 菜谱名称：</label>
                    </div>
                </li>
                <li><input type="text" class="am-form-field am-input-lg" placeholder="关键词搜索" style="height: 30px" name="search"/></li>
                <li><input type="submit" class="am-btn am-radius am-btn-lg am-btn-success" style="height: 30px" value="搜索"/></li>
            </ul>
        </div>
        </form>

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
                <tr align="center" class="content">
                    <td>{{$v->id}}</td>
                    <td><a href="#">{{$v->title}}</a></td>
                    <td>
                        {{$arr[$v->cid]}}
                    </td>
                    <td class="am-hide-sm-only">{{$v->created_at}}</td>
                    <td class="am-hide-sm-only">
                        <i id="am-status" class="am-icon-check am-text-primary"></i>
                    </td>
                    <td><div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <a class="am-btn am-btn-default am-btn-xs am-text-success am-round am-on-off"><span class="am-icon-pencil-square-o"></span> </a>
                                <a class="am-btn am-btn-default am-btn-xs am-text-danger am-round am-del"><span class="am-icon-trash-o"></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$recipe->appends(array('search'=>$search))->render()}}

        </form>

    </div>

    <script>

        $('.am-del').click(function(){
            var id = $(this).parents('.content').children().eq(0).html();
            var tr = $(this).parents('.content');
            layui.use('layer', function(){
                var layer = layui.layer;

                var flag = layer.confirm('您确定要删除该菜谱吗？', {
                    btn: ['确定','点错了'] //按钮
                }, function(){
                    $.get('{{url('/admin/recipe/delete')}}',{id:id},function(data){
                        if(data){
                            tr.remove();
                            layer.msg('删除成功', {icon: 1},{time:1000});
                        }else{
                            layer.msg('删除失败', {icon: 2},{time:1000});
                        }
                    });


                }, function(){
                    layer.msg('取消删除', {icon: 6},{time:1000});
                });
            });
        })

        $('.am-on-off').click(function(){
            var id = $(this).parents('.content').children().eq(0).html();
            var status = $(this).parents('.content').children().eq(4).find('i');
            layui.use('layer', function(){
                var layer = layui.layer;
                $.get('{{url('/admin/recipe/status')}}',{id:id},function(data){
                    if (data == 1){
                        status.removeAttr('class');
                        status.addClass('am-icon-check am-text-primary');
                        layer.msg('菜谱上线', {icon: 1},{time:1000});
                    }else if(data == 0){
                        status.removeAttr('class');
                        status.addClass('am-icon-close am-text-warning');
                        layer.msg('菜谱下线', {icon: 1},{time:1000});
                    }

                });
            });
        })
    </script>

@endsection