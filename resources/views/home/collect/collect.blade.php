@extends('home.layouts.app')

@section('title','个人信息页') 

@section('content')
    <article class="htmleaf-container">
        <div id="container">
            <h3>点击下面的红心查看效果！</h3>

            <div class="feed" id="feed1">
            <p>W3C </p>
            <div class="heart " id="like1" rel="like"></div> <div class="likeCount" id="likeCount1">收藏</div>
            </div>

            <div class="feed" id="feed2">
            <p>百度一下</p>
            <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">收藏</div>
            </div>

        </div>

    </article>
    


    <script>
        var cid = 1;
        var hid = 2;
    $(document).ready(function()
    {
    
    $('body').on("click",'.heart',function()
    {
        
        var A=$(this).attr("id");
        var B=A.split("like");
        var messageID=B[1];
        var C=parseInt($("#likeCount"+messageID).html());
        $(this).css("background-position","")
        var D=$(this).attr("rel");

        if(D === 'like'){  
            $.get('/home/add',{'cid':cid,'hid':hid},function(data){
                console.log(data);
            })
            $("#likeCount"+messageID).html('取消收藏');
            $(this).addClass("heartAnimation").attr("rel","unlike");
        
        }
        else{
             $.get('/home/delete',{'cid':cid,'hid':hid},function(data){
                console.log(data);
            })
            $("#likeCount"+messageID).html('收藏');
            $(this).removeClass("heartAnimation").attr("rel","like");
            $(this).css("background-position","left");
        }


    });


    });

    </script>
@endsection