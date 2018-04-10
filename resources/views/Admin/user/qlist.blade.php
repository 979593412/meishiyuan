
@extends('Admin.layout')

@section('title', '前台用户浏览页面')

@section('content')


    <div class="admin-biaogelist">

    <div class="listbiaoti am-cf">
    <ul class="am-icon-users"> 会员管理</ul>

    <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="#">用户列表</a></dl>

    <!-- <dl>
     <a href="{{ url('/user/add') }}" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus">手动添加会员</a>
    </dl> -->
    <!--这里打开的是新页面-->
        <form class="am-topbar-form am-topbar-left am-form-inline" role="search" action="{{url('/quser/list')}}" method="get">
            <div class="am-form-group">

                <input type="text" name="username" value="" class="am-form-field am-input-sm" placeholder="搜索">
                <input type="submit" value="搜索" class="btn-info">
            </div>
        </form>


    </div>

    <div>
    {{--错误提示信息框--}}
    @if(session('msg'))
    {{ session('msg') }}
    @endif

    </div>

    <form class="am-form am-g">
    <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr class="am-success">


    <th class="table-id">ID</th>
    <th class="table-title">用户名</th>
   
    <th class="table-title">邮箱</th>
    <th class="table-type">状态</th>

    <th class="table-author am-hide-sm-only">注册日期</th>
    <th class="table-date am-hide-sm-only">更新时间</th>
    <th width="130px" class="table-set">操作</th>
    </tr>
    </thead>

    <tbody>

    @foreach($quser as $v)
    <tr>


    <td>{{ $v->id }}</td>
    <td><a href="#">{{ $v->username }}</a></td>
    <!-- <td>{{ $v->password }}</td> -->
    <td><a href="#">{{ $v->email }}</a></td>
   
    <td class="am-hide-sm-only">
    @if($v->status == 1)  开通   @else 禁用
    @endif</td>
    <td class="am-hide-sm-only">{{ $v->created_at }}</td>
    <td class="am-hide-sm-only">{{ $v->updated_at }}</td>
    <td>


    <div class="am-btn-toolbar">
    <div class="am-btn-group am-btn-group-xs">
    @if ($v->status == 1)
    <a href="{{ url('/quser/jinyong/'.$v->id)}}" class="am-btn am-btn-default am-btn-xs am-text-danger am-round" title="禁用"><span class="am-icon-trash-o" ></span></a>

    @else
    <a href="{{ url('/quser/kaitong/'.$v->id) }}" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round"  title="开通"><span class="am-icon-pencil-square-o"></span></a>

    @endif

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
                {{ $quser->appends($request->all())->render() }}
    </ul>




    <hr />

    </form>




@endsection

