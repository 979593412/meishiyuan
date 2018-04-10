<div class="pure-g pb40">
    <!-- left avatar -->
    <div class="pure-u-5-24 people-base-left avatar">
        <img src="{{!empty($details->face) ? '/uploads/'.$details->face : '/home/images/touxiang.png'}}" alt="" width="150" height="150">
    </div>
    <!-- left avatar -->

    <!-- middle info -->
    <div class="pure-u-5-8 font12 pr30">
        <h1 class="page-title mb10">
            {{$details->nickname}}
        </h1>

        <!-- basic info -->
        <div class="gray-font">
            <div>

                        <span class="mr10 display-inline-block">
                            @if ($details == 'x')
                                保密
                            @elseif ($details == 'm')
                                男
                            @else
                                女
                            @endif</span>

                <span class="mr10 display-inline-block"><i class="icon-profile icon-profile-home"></i>{{$details->addr}}</span>

                {{--<span class="mr10 display-inline-block"><i class="icon-profile icon-profile-location"></i>广东,东莞</span>--}}

                {{--<span class="mr10 display-inline-block"><i class="icon-profile icon-profile-job"></i>编辑</span>--}}

                <span class="display-inline-block">{{$details->created_at}}加入</span>
            </div>
            <div>

            </div>
        </div>
        <!-- basic info -->

        <!-- desc -->
        <div class="people-base-desc dark-gray-font mt10"></div>
        <!-- desc -->
    </div>
    <!-- middle info -->

    <!-- right extra -->
    <div class="pure-u-1-6 align-center people-base-right pos-r">

        <div class="follow-wrap block-bg p10 pl15 pr15 pure-g w100">
            <div class="pure-u-1-2 following-num">
                <div class="font12 dark-gray-font mb10">关注的人</div>
                <div><a href="javascript:void(0);" class="bold font16">1</a></div>
            </div>
            <div class="pure-u-1-2">
                <div class="font12 dark-gray-font mb10">被关注</div>
                <div><a href="javascript:void(0);" class="bold font16">0</a></div>
            </div>
        </div>
    </div>
    <!-- right extra -->
</div>
