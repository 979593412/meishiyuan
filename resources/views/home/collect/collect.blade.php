@extends('home.layouts.app')

@section('title','我的收藏') 

@section('content')


<div class="block white-bg rl-show">
<div class="rl-summary block block-has-padding block-bg block-negative-margin normal-font">
  <h1 class="page-title align-center">我的收藏</h1>
  <div class="stats align-center gray-font">
    {{ $ress }}&nbsp;收藏
  </div>
  <div class="desc">
    
  </div>
  <div class="pure-g">
    <div class="pure-u-1-2"> 
        
        <a href="" class="avatar-link">
            <img src="{{!empty(session()->get('userInfo')->face) ? '/uploads/'.session()->get('userInfo')->face : '/home/images/face.png'}}" alt=" " width="30" height="30">&nbsp;{{session()->get('userInfo')->nickname}}
        </a>

      
    </div>
    
  </div>
  <div class="pure-g time">
    <div class="pure-u-1-2 gray-font">
    创建时间:{{session()->get('userInfo')->created_at}}<br>
    最后修改:{{session()->get('userInfo')->updated_at}}
    </div>
  </div>

    <!-- <form action="/recipe/create" method="POST"> -->

      <a href="{{url('/recipe/create')}}" >添加菜谱</a>
      <!-- <input type="hidden" name="xf" value="VmdyM"> -->
    <!-- </form> -->
</div>
    
<div float="left">
 @foreach($res as $v)

<div class="rl-recipes" >
  <div class="block-title">
    
  </div>
  <div class="normal-recipe-list"  >
      <ul class="plain">
       
          <li>
            <div class="recipe pure-g">
                <div class="cover pure-u">
                    <a href="http://www.xiachufang.com/recipe/102253335/" class="image-link" target="_blank">
                        <img src="/home/recipe/upload/{{$v->pic}}" data-src="http://s2.cdn.xiachufang.com/34c5e14c1c0a11e7947d0242ac110002_1280w_1023h.jpg?imageView2/1/w/215/h/138/interlace/1/q/90" width="215" height="138" alt="法式吐司配草莓酱" class="unveiled">
                    </a>
                </div>
                <div class="info pure-u">
                    <p class="name">
                        <a href="http://www.xiachufang.com/recipe/102253335/" target="_blank">{{$v->title}}</a>
                        <i class="step-icon"></i>
                    </p>
                    
                    <p class="ing ellipsis">
                
                        {{session()->get('userInfo')->created_at}}
                    </p>
            
                    <p class="stats">
                        综合评分&nbsp;<span class="score bold green-font">9.2</span>&nbsp;（<span class="bold score">10</span>&nbsp;做过）
                    </p>
                    <p class="author">
                        望星子
                    </p>
                    <p class="reason">
                    </p>
                    <input type="hidden" value="{{$v['id']}}" name="" id="bid">
                    <input type="hidden" value="{{session()->get('user')->id}}" name="" id="uid">
                      <div class="rl-item-action">
                        <!-- <form action="/home/delete" method="POST" class="rl-item-action-links"> -->
                        
                            <input name="dian" type="submit" class="gray-link" value="取消收藏" >
                        <!-- </form> -->
                       
                      </div>
                </div>
            </div>

          </li>

      </ul>
  </div>
</div>




@endforeach
</div>



<script type="text/javascript">

    
   
    var uid  = $('#uid').val();
    var bid  = $('#bid').val();
    // console.log(bid);
    
    $('input[name=dian]').click(function(){


        $.ajax({
                url: '/home/delete',   // url请求的脚本
                data: {'uid':uid,'bid':bid},    // data发送的数据
                // dataType: 'json',    dataType数据的类型
                type: 'GET',
                success: function(data){
                    document.location.reload();

                }

            })

    })




</script>




@endsection