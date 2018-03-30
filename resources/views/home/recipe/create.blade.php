@extends('home.layouts.app')

@section('title','创建菜谱-美食源')

@section('content')

        <link href="{{asset('home/recipe/css/6b39c3c35dfaf507842e.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('home/recipe/css/be3cb642cde281b5785d.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('home/recipe/css/f780e7ce0c554aea0d40.css')}}" rel="stylesheet" type="text/css">


        <div class="page-outer">
            <!--begin of page-container-->
            <div class="page-container">

                <div class="pure-g">
                    <!-- begin of main-panel -->
                    <div class="pure-u-2-3 main-panel">

                        <form action="{{url('/recipe')}}" method="post" enctype="multipart/form-data" class="layui-form">
                            {{--token--}}
                            {{csrf_field()}}
                            <input type="hidden" name="cid" value="1">
                            <h1 class="page-title">
                                <input name="title" class="input text hint layui-input" placeholder="添加菜谱名称" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;background-color: #fffce9;" type="text" lay-verify="required" value="{{old('title')}}">
                            </h1>

                        <div class="block recipe-edit">
                            <div class="cover image block-negative-margin">
                                <div class="upload-box">
                                    <div class="upload-widget">
                                        <div class="upload" id="preview">

                                                 <span class="upload-text" onclick="$('#previewImg').click();">
                                                    <span class="main-title">+ 菜谱封面</span><br>
                                                    <span class="sub-title">最佳尺寸：1280 × 1024</span>
                                                 </span>
                                        </div>
                                        <input  lay-verify="required" type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="pic" class="upload-widget-file layui-input">
                                    </div>
                                </div>
                            </div>


                            <div class="author mt30">
                                <a href="#" title="{{$user->Details->nickname}}的厨房" class="avatar-link avatar" tabindex="-1" target="_blank">
                                    <img src="{{!empty(session()->get('userInfo')->face) ? '/uploads/'.session()->get('userInfo')->face : '/home/images/face.png'}}" alt="{{$user->nickname}}" width="60" height="60">
                                    &nbsp;{{$user->Details->nickname}}
                                </a>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-right" style="color: #f00;margin-left:110px;">
                                    <ul>
                                        @if(is_object($errors))
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        @else
                                            <li>{{ $errors }}</li>
                                        @endif
                                    </ul>
                                </div>
                            @endif
                            {{--描述--}}
                            <div class="desc mt30">
                                <div class="placeholder" ng-placeholder="点击添加菜谱描述" type="textarea">
                                    <textarea lay-verify="required" value="{{old('content')}}" name="content" class="input text layui-input" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 100px;" placeholder="点击添加菜谱描述"></textarea>
                                </div>
                            </div>

                            {{--用料  start--}}
                            <h2>用料</h2>
                            <div class="ings">
                                <table>
                                    <tbody>
                                        <tr class="ng-scope">
                                            <td class="unit has-border">
                                                <div class="placeholder ng-isolate-scope ng-pristine ng-valid">
                                                    <input lay-verify="required"  name="food[]" class="input text layui-input" placeholder="食材：如鸡蛋" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 50px;" type="text">
                                                </div>
                                            </td>
                                            <td class="unit has-border">
                                                <div class="placeholder ng-isolate-scope ng-pristine ng-valid">
                                                    <input lay-verify="required" name="dosage[]" class="input text layui-input" placeholder="用量：如1只" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 50px;" type="text">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix">
                                    <button type="button"  class="button gray-button2 small-button" id="add-Material">追加一行用料</button>
                                </div>
                            </div>

                            {{--做法  start--}}
                            <h2>做法</h2>
                            <div class="steps">
                                <ol class="ng-isolate-scope ng-pristine ng-valid">
                                    <!-- ngRepeat: step in recipe.steps -->
                                    <li class="step container ng-scope">
                                        <div class="text ml0" style="width: 90%;height: 100px">
                                            <div class="placeholder ng-isolate-scope ng-pristine ng-valid" style="height: 100%;">
                                                <textarea lay-verify="required" class="input text layui-input" placeholder="点击添加菜谱步骤" style="overflow: hidden; overflow-wrap: break-word; resize: none;width: 90%;height: 100%;"  name="step[]"></textarea>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end ngRepeat: step in recipe.steps -->
                                </ol>
                                <button type="button" class="button gray-button2 small-button" id="add-Step">追加一个步骤</button>
                            </div>

                            {{--小贴士--}}
                            <div class="tip-container">
                                <h2>小贴士</h2>
                                <div class="tip">
                                    <div class="placeholder ng-isolate-scope ng-pristine ng-valid" type="textarea">
                                        <textarea class="input text" value="{{old('tip')}}" name="tip" placeholder="点击添加小贴士" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 83px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="createRecipeEnd"></div>
                        <div class="transparent-bg recipe-edit-actions">
                            <input value="发布菜谱" class="button" type="submit" lay-submit="" lay-filter="*">
                        </div>

                        <div id="main-panel-bottom"></div>


                        </form>

                    </div>
                    <!-- end of main-panel -->

                    <!-- begin of right-panel -->
                    <div class="pure-u-1-3 right-panel">

                        <div class="block block-has-padding block-bg create-recipe-slogan">
                            <div class="title-bar">
                                <div class="title">创建菜谱的人是厨房的天使</div>
                            </div>
                            <div class="content gray-font normal-font">
                                美食源鼓励大家上传自己原创的菜谱信息； 转载、翻译的内容请在简介里表明出处。
                            </div>
                        </div>
                        <div>
                            <div class="block">
                                <div class="title-bar">
                                    <div class="title">推荐至分类</div>
                                </div>
                                <div class="layui-btn-container">
                                    <button class="layui-btn layui-btn-primary layui-btn-radius layui-btn-xs">家常菜</button>
                                    <button class="layui-btn layui-btn-radius layui-btn-xs">早餐</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-radius layui-btn-xs">减肥</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-radius layui-btn-xs layui-btn-disabled">小吃</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-radius layui-btn-xs">烘培</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-radius layui-btn-xs">下饭菜</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of right-panel -->
                </div>

            </div>
            <!-- end of page-container -->
        </div>
        <div id="color_timer"></div>

        <script>
            window.availiable_cats = ["PH\u5927\u5e08","\u4fdd\u7f57","\u96f7\u8499\u5fb7","\u5c0f\u5c71\u8fdb","\u83d3\u5b50\u5b66\u6821","\u85e4\u7530\u5343\u79cb","\u5ddd\u4e0a\u6587\u4ee3","\u798f\u7530\u6df3\u5b50","\u9ed1\u5ddd\u6109\u5b50","Rachel Khoo","Jamie Oliver","\u84dd\u5e26\u5b66\u6821","\u6df1\u591c\u98df\u5802","\u5b64\u72ec\u7684\u7f8e\u98df\u5bb6","\u591a\u8c22\u6b3e\u5f85","\u4e00\u8d77\u5403\u996d\u5427","\u9762\u5305\u548c\u6c64\u548c\u732b\u597d\u5929\u6c14","\u6ca1\u6709\u540d\u5b57\u7684\u751c\u70b9\u5e97","Happy Together","\u767d\u718a\u5496\u5561\u5385","\u82b1\u4e4b\u61d2\u6563\u996d","\u5eb7\u7199\u6765\u4e86","\u8c03\u9152\u5e08Bartender","\u80af\u5fb7\u57fa","\u5916\u5a46\u5bb6","\u6ee1\u8bb0","\u5473\u591a\u7f8e","\u9ea6\u5f53\u52b3","\u9c9c\u828b\u4ed9","85\u5ea6c","\u6e2f\u4e3d","\u5357\u4eac\u5927\u724c\u6863","\u91d1\u9f0e\u8f69","21cake","\u3010\u89c6\u3011\u7f8e\u56fd\u5b85\u7537\u7f8e\u98df","\u3010\u89c6\u3011\u66fc\u98df\u6162\u8bed","\u3010\u89c6\u3011\u4e00\u6761\u89c6\u9891","\u3010\u89c6\u3011\u83ab\u59ae\u5361\u7f8e\u98df\u53a8\u623f","\u3010\u89c6\u3011\u4e00\u4eba\u98df","\u3010\u89c6\u3011Tinrry\u4e0b\u5348\u8336","\u3010\u89c6\u3011\u4f18\u96c5\u70d8\u7119","\u3010\u89c6\u3011\u5c0f\u7fbd\u79c1\u53a8","\u3010\u89c6\u3011\u65e5\u98df\u8bb0","\u3010\u89c6\u3011\u77e5\u5473\u4eba\u751f","\u3010\u89c6\u3011\u996d\u7c73\u4e86\u6ca1","\u3010\u89c6\u3011\u7c73\u4e8c\u4e54","\u5c0f\u5403","\u96f6\u98df","\u5e7f\u4e1c\u5c0f\u5403","\u65e5\u5f0f\u5c0f\u5403","\u5317\u4eac\u5c0f\u5403","\u5ddd\u6e1d\u5c0f\u5403","\u6c5f\u5357\u5c0f\u5403","\u6e2f\u5f0f\u5c0f\u5403","\u53f0\u6e7e\u5c0f\u5403","\u9655\u897f\u5c0f\u5403","\u6e56\u5317\u5c0f\u5403","\u6c99\u62c9","\u51c9\u83dc","\u4e2d\u5f0f\u65e9\u9910","\u5feb\u624b\u65e9\u9910","\u897f\u5f0f\u65e9\u9910","\u4e0b\u5348\u8336","\u7535\u996d\u7172","\u5bbf\u820d","\u5bb4\u5ba2","\u5916\u8c8c\u534f\u4f1a","\u4fbf\u5f53","\u4e0b\u9152\u83dc","\u5c0f\u6e05\u65b0","\u62cc\u9762","\u7092\u9762","\u521b\u610f\u83dc","\u5355\u8eab\u98df\u8c31","\u6c64\u9762","\u51c9\u9762","\u91ce\u9910","\u7116\u9762","\u5bb5\u591c","\u9762\u6761","\u61d2\u4eba\u98df\u8c31","\u86cb\u7cd5","\u9762\u5305","\u997c\u5e72","\u5410\u53f8","\u4e73\u916a\u86cb\u7cd5","\u66f2\u5947","\u62ab\u8428","\u6155\u65af","\u9a6c\u82ac","\u6d3e","\u621a\u98ce\u86cb\u7cd5","\u86cb\u7cd5\u5377","\u86cb\u631e","\u7eb8\u676f\u86cb\u7cd5","\u9910\u5305","\u53f8\u5eb7","\u5854","\u5976\u6cb9\u86cb\u7cd5","\u6ce1\u8299","\u78c5\u86cb\u7cd5","\u6d77\u7ef5\u86cb\u7cd5","\u739b\u5fb7\u7433","\u9762\u5305\u5377","\u88f1\u82b1\u86cb\u7cd5","\u6b27\u5f0f\u9762\u5305","\u82cf\u6253\u997c\u5e72","\u7cd6\u971c\u997c\u5e72","\u5976\u6cb9\u971c","\u8f6f\u9762\u5305","\u5939\u5fc3\u997c\u5e72","\u54b8\u5473\u997c\u5e72","\u7ffb\u7cd6\u997c\u5e72","\u9020\u578b\u997c\u5e72","\u6c64\u7fb9","\u996d","\u997c","\u7ca5","\u7092\u996d","\u997a\u5b50","\u7116","\u9992\u5934","\u4e09\u660e\u6cbb","\u62cc\u9762","\u7092\u9762","\u9984\u9968","\u5305\u5b50","\u996d\u56e2","\u6c64\u9762","\u51c9\u9762","\u76d6\u6d47\u996d","\u7172\u4ed4\u996d","\u7117\u996d","\u7116\u9762","\u70e9\u996d","\u9762\u6761","\u5143\u5bb5\u8282","\u6c64\u5706","\u5723\u8bde\u8282","\u5e74\u591c\u996d","\u60c5\u4eba\u8282","\u51ac\u81f3","\u4e2d\u79cb\u8282","\u4e07\u5723\u8282","\u7aef\u5348\u8282","\u814a\u516b\u8282","\u6e05\u660e\u8282","\u611f\u6069\u8282","\u590d\u6d3b\u8282","\u751c\u54c1","\u996e\u54c1","\u7cd5\u70b9","\u5e03\u4e01","\u51b7\u996e","\u679c\u9171","\u7cd6\u6c34","\u51b0\u6dc7\u6dcb","\u5496\u5561","\u8c46\u6d46","\u5976\u8336","\u9152","\u679c\u6c41","\u679c\u51bb","\u82b1\u8349\u8336","\u8fa3","\u5496\u55b1","\u7cd6\u918b","\u849c\u9999","\u9178\u751c","\u5976\u9999","\u5b5c\u7136","\u9c7c\u9999","\u4e94\u9999","\u6e05\u6de1","\u714e","\u84b8","\u7ea2\u70e7","\u5364","\u5e72\u9505","\u706b\u9505","\u514d\u70e4","\u70e4\u7bb1","\u70e4\u7bb1\u83dc","\u7535\u996d\u7172","\u9762\u5305\u673a","\u5fae\u6ce2\u7089","\u5e73\u5e95\u9505","\u7802\u9505","\u51b0\u7bb1","\u7535\u997c\u94db","\u9ad8\u538b\u9505","\u8c46\u6d46\u673a","\u5854\u5409\u9505","\u69a8\u6c41\u673a","\u7535\u538b\u529b\u9505","\u65e5\u5f0f","\u97e9\u5f0f","\u897f\u5f0f"]
            window.is_kfun_recipe_provider = false
            window.can_upload_third_party_video = false
        </script>


        <script src="{{asset('home/recipe/js/upload.js')}}"></script>
        <script src="{{asset('home/recipe/js/supplement.js')}}"></script>
        <script>
            layui.use('form', function(){
                var form = layui.form;
            });
        </script>


@endsection

