@extends('admin.layout')


@section('title', '广告位')

@section('content')
    <div class="admin-biaogelist">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-users"> 会员管理</ul>

            <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="#">商品列表</a></dl>

            <dl>
                <a type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus" href="{{url('/admin/home_ad/create')}}"> 添加广告</a>
            </dl>
            <!--这里打开的是新页面-->


        </div>


        <form class="am-form am-g">
            <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
                <thead>
                <tr class="am-success">
                    <th class="table-check"><input type="checkbox" name="quan"/></th>

                    <th class="table-id">ID</th>
                    <th class="table-title">URL</th>
                    <th class="table-type">广告图片</th>
                    <th class="table-author am-hide-sm-only">添加时间</th>
                    <th class="table-author am-hide-sm-only">修改时间</th>
                    <th width="130px" class="table-set">操作</th>
                </tr>
                </thead>
                <tbody>

                @foreach($gg as $v)
                    <tr>
                        <td><input type="checkbox" name="fu" value="{{$v->id}}"/></td>

                        <td>{{$v->id}}</td>
                        <td>{{$v->url}}</td>
                        <td class="am-hide-sm-only"><img src="/uploads/{{$v->pic}}" width="30px"></td>
                        <td class="am-hide-sm-only">{{$v->created_at}}</td>
                        <td class="am-hide-sm-only">{{$v->updated_at}}</td>
                        <td>

                            <div class="am-btn-toolbar" >
                                <div class="am-btn-group am-btn-group-xs">

                                    <a href="/admin/home_ad/{{$v->id}}/edit"
                                       class="am-btn am-btn-default am-btn-xs am-text-success am-round">修改</a>




                                    <a href="/admin/home_ad/{{$v->id}}"
                                       class="am-btn am-btn-default am-btn-xs am-text-success am-round">删除</a>




                                </div>
                            </div>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

            <div class="am-btn-group am-btn-group-xs">

                <button type="button" class="am-btn am-btn-default" id="batchDel"><span class="am-icon-trash-o"></span> 删除
                </button>
            </div>
            {{--批量删除的js文件--}}
            <script>
                var quan = document.getElementsByName('quan')[0];
                // console.log(quan);
                //全选和取消
                quan.onclick = function(){
                    // alert('明明');
                    if (quan.checked) {
                        $('[name=fu]').each(function(){
                            this.checked = true;
                        })
                    } else {
                        $('[name=fu]').each(function(){
                            this.checked = false;
                        })
                    }
                }
                var ps = '';
                $('#batchDel').click(function(){
                    $('[name=fu]:checked').each(function(){
                        $(this).parents('tr').remove();
                        ps += $(this).val()+',';

                        // $.get('/admin/home_ad/'+ps,{},function(){});

                    });
                    // console.log(ps);
                    $.get('/admin/home_ad/'+ps,{},function(){});

                })
            </script>

            {{--<ul class="am-pagination am-fr">--}}
            {{--<li class="am-disabled"><a href="#">«</a></li>--}}
            {{--<li class="am-active"><a href="#">1</a></li>--}}
            {{--<li><a href="#">2</a></li>--}}
            {{--<li><a href="#">3</a></li>--}}
            {{--<li><a href="#">4</a></li>--}}
            {{--<li><a href="#">5</a></li>--}}
            {{--<li><a href="#">»</a></li>--}}
            {{--</ul>--}}
            {{ $gg->links() }}


            <hr/>
            <p>注：.....</p>
        </form>


        <div class="foods">
            <ul>
                {{session('sh')}}
            </ul>
            <dl>
                <a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a>
            </dl>
        </div>


    </div>
@endsection
