@extends('home.layouts.app')

@section('title','个人信息页')

@section('content')
    {{--城市联动js文件--}}
    {{--<script src="/home/js/area.js"></script>--}}
    <script class="resources library" src="/home/js/area.js" type="text/javascript"></script>






    <div class="page-container">
<h1 class="page-title">设置个人信息</h1>

<!-- nav bar -->

<div class="bar">
    
    <ul class="plain pure-g">
          <li class="active pure-u"><span>基本信息</span></li>
          {{--<li class="pure-u"><a href="https://www.xiachufang.com/account/pic/">设置头像</a></li>--}}
          {{--<li class="pure-u"><a href="https://www.xiachufang.com/account/complete/">绑定邮箱</a></li>--}}
          {{--<li class="pure-u"><a href="https://www.xiachufang.com/account/bind/">绑定账号</a></li>--}}
    </ul>
</div>

<!-- nav bar -->

<div class="block block-has-padding white-bg">
  <div class="p25">
    



<form enctype="multipart/form-data" class="align-left" id="account-form" method="POST" action="/home/details/update">

  {{ csrf_field() }}
    <div class="pure-g mb20">
        <div class="pure-u-1-8 align-right pr20">头像</div>
        <div class="pure-u-7-8">

            <div class="col-sm-9 big-photo">
                <div id="preview">
                    <img id="imghead" border="0" src="/Admin/i/photo_icon.png" width="80" height="80" onclick="$('#previewImg').click();">
                </div>
                <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="face">

            </div>

            <span class="gray-font">&nbsp;&nbsp;提示：点击上传你可爱的头像吧</span>
        </div>
    </div>

  <div class="pure-g mb20">
    <div class="pure-u-1-8 align-right pr20">昵称</div>
    <div class="pure-u-7-8">
      <input type="text" name="nickname" placeholder="{{session()->get('userInfo')->nickname}}">
        <span class="gray-font">&nbsp;&nbsp;提示：给自己起一个好听的昵称吧</span>
    </div>
  </div>

  <div class="pure-g mb20">
    <div class="pure-u-1-8 align-right pr20">自我介绍</div>
    <div class="pure-u-1-2">
      <textarea name="info" rows="3" placeholder="{{session()->get('userInfo')->info}}"></textarea>
    </div>
  </div>

  <div class="pure-g mb20">
    <div class="pure-u-1-8 align-right pr20">性别</div>
    <div class="pure-u-1-2">
      <input type="radio" name="sex" none="" value="m">
      <span>&nbsp;男&nbsp;&nbsp;</span>
      <input type="radio" name="sex" none="" value="w">
      <span>&nbsp;女&nbsp;&nbsp;</span>
      <input type="radio" name="sex" none="" value="x">
      <span>&nbsp;其他</span>
    </div>
  </div>

  <div class="pure-g mb20">
    <div class="pure-u-1-8 align-right pr20">生日</div>
    <div class="pure-u-1-2">
      <select name="year" id="year">
        <option value="">请选择</option>
        <option value="1950">1950</option>
        <option value="1951">1951</option>
        <option value="1952">1952</option>
        <option value="1953">1953</option>
        <option value="1954">1954</option>
        <option value="1955">1955</option>
        <option value="1956">1956</option>
        <option value="1957">1957</option>
        <option value="1958">1958</option>
        <option value="1959">1959</option>
        <option value="1960">1960</option>
        <option value="1961">1961</option>
        <option value="1962">1962</option>
        <option value="1963">1963</option>
        <option value="1964">1964</option>
        <option value="1965">1965</option>
        <option value="1966">1966</option>
        <option value="1967">1967</option>
        <option value="1968">1968</option>
        <option value="1969">1969</option>
        <option value="1970">1970</option>
        <option value="1971">1971</option>
        <option value="1972">1972</option>
        <option value="1973">1973</option>
        <option value="1974">1974</option>
        <option value="1975">1975</option>
        <option value="1976">1976</option>
        <option value="1977">1977</option>
        <option value="1978">1978</option>
        <option value="1979">1979</option>
        <option value="1980">1980</option>
        <option value="1981">1981</option>
        <option value="1982">1982</option>
        <option value="1983">1983</option>
        <option value="1984">1984</option>
        <option value="1985">1985</option>
        <option value="1986">1986</option>
        <option value="1987">1987</option>
        <option value="1988">1988</option>
        <option value="1989">1989</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
      </select>
      <span>&nbsp;年&nbsp;</span>

      <select name="month" id="month">
        <option value="">请选择</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <span>&nbsp;月&nbsp;</span>

      <select name="day" id="day">
        <option value="">请选择</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
      <span>&nbsp;日&nbsp;</span>
    </div>
  </div>

  <div class="pure-g mb20">
    <div class="pure-u-1-8 align-right pr20">家乡</div>
    <div class="pure-u-1-2">

          <select id="s_province" name="s_province"></select>  
          {{--城市联动--}}
        <select id="s_city" name="s_city" ></select>
        
        <select id="s_county" name="s_county"></select>
          

    </div>
  </div>

  {{--<div class="pure-g mb20">--}}
    {{--<div class="pure-u-1-8 align-right pr20">现居</div>--}}
    {{--<div class="pure-u-1-2">--}}
        {{--<select name="" id=""></select>--}}
    {{--</div>--}}
  {{--</div>--}}



    {{--城市联动js--}}
    <script type="text/javascript">_init_area();</script>
    <div id="show"></div>
    <script type="text/javascript">

        var Gid  = document.getElementById ;

        var showArea = function(){

            Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +

                Gid('s_city').value + " - 县/区" +

                Gid('s_county').value + "</h3>"

        }

        Gid('s_county').setAttribute('onchange','showArea()');

    </script>

  <div class="pure-g mb20">
    <div class="pure-u-1-8 align-right pr20">职业</div>
    <div class="pure-u-7-8">
      <select name="career" id="jobs">
        <option value="">请选择</option>
        <option value="学生">学生</option>
        <option value="政府职员">政府职员</option>
        <option value="教师">教师</option>
        <option value="医生">医生</option>
        <option value="营养师">营养师</option>
        <option value="摄影师">摄影师</option>
        <option value="职业厨师">职业厨师</option>
        <option value="律师">律师</option>
        <option value="会计">会计</option>
        <option value="翻译">翻译</option>
        <option value="编辑">编辑</option>
        <option value="音乐人">音乐人</option>
        <option value="演艺人">演艺人</option>
        <option value="广告人">广告人</option>
        <option value="公司文员">公司文员</option>
        <option value="IT/互联网">IT/互联网</option>
        <option value="个体商人">个体商人</option>
        <option value="全职主妇">全职主妇</option>
        <option value="其他">其他</option>
      </select>
      {{--<input type="text" name="other_jobs" value="" class="ml10 hidden">--}}
    </div>
  </div>

  <div class="pure-g">
    <div class="pure-u-1-8">&nbsp;</div>
    <div class="pure-u-1-2">
      <input type="submit" value="更新" class="button">
    </div>
  </div>

</form>


  </div>
</div>


  </div>
  <!-- end of page-container -->

@endsection