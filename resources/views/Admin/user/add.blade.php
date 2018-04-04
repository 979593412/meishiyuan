

@extends('admin.layout')

@section('title', '后台用户浏览页面')

@section('content')

    <div class="admin-biaogelist">


    <div>

    @if(session('msg'))
    {{ session('msg') }}
    @endif
    </div>

    <div class="am-container">
    <div class="am-g">
    <div class="am-u-md-12">
    <!--用面板将表单包裹好 -->
    <div class="am-panel am-panel-success" id="one">
    <div class="am-panel-hd">添加用户</div>
    <div class="am-panel-bd">
    <!-- 表单界面 -->
    <form  class="am-form" data-am-validator action="{{url('/user/update') }}" method="post">
    {{ csrf_field() }}
    <fieldset>

    <legend>后台用户添加页面</legend>

    <div class="am-form-group">
    <label for="doc-vld-name-2">用户名：</label>
    <input name="username"  type="text" id="doc-vld-name-2-1" minlength="3" placeholder="输入用户名（至少 3 个字符）" required/>
    </div>

    <div class="am-form-group">
    <label for="doc-vld-url-2">密码：</label>
    <input name="password"  type="password" id="doc-vld-url-2" placeholder="请输入密码" required/>
    </div>
     <div class="am-form-group">
    <label for="doc-vld-url-2">确认密码：</label>
    <input name="repass"  type="password" id="doc-vld-url-2" placeholder="请确认密码" required/>
    </div>


    <div class="am-form-group">
    <label>后台权限: </label>
    <label class="am-radio-inline">
    <input type="radio"  value="2" checked="1"  name="auth" >VIP
    </label>
    <label class="am-radio-inline">
    <input type="radio" value="1"   name="auth">SVIP
    </label>
    </div>

    <div class="am-form-group">
    <label>后台用户权限: </label>
    <label class="am-radio-inline">
    <input type="radio"  value="1" checked="1" name="status" >开通
    </label>
    <label class="am-radio-inline">
    <input type="radio" value="0" name="status" >禁用
    </label>
    </div>

    <button class="am-btn am-btn-secondary" type="submit">提交</button>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div> 
    </div>



      

@endsection


