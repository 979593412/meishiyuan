<?php

//admin后台主页面;

//-----------------------------------后台 Z1HOTFiIP7dL0Iqfre5nNEd9j1lzB4xOW4ITynXPMZA=


//轮播图----------------------------------------------------
Route::resource('/admin/fenlei','admin\CarouselController')->middleware('islogin');;




//后台广告
Route::resource('/admin/home_ad','Admin\Home_adController')->middleware('islogin');;


//后台菜谱管理
Route::match(['get', 'post'],'/admin/recipe','Admin\RecipeController@index')->middleware('islogin');
Route::get('/admin/recipe/delete','Admin\RecipeController@delete')->middleware('islogin');
Route::get('/admin/recipe/status','Admin\RecipeController@on_off')->middleware('islogin');

//login 后台登录
Route::get('/admin/logins','Admin\LoginController@login');

//生成路由的验证码
Route::get('/admin/code','Admin\LoginController@code');

// 第三方验证码生成  gregwar/captcha 插件 Packagist
//Route::get('/code/captcha/{id}','Admin\LoginController@captcha');

//登录验证
Route::post('/admin/dologin','Admin\LoginController@dologin');

//退出登录
Route::get('/admin/logout','Admin\LoginController@logout');




//后台登录验证路由组

Route::group(['parfix'=>'admin','namespace'=>'Admin','middleware'=>'islogin'],function (){
// Route::group(['parfix'=>'admin','namespace'=>'Admin'],function (){

    // 后台用户列表页面
    Route::get('user/list','UserController@list');
    // 后台用户添加页面
    Route::get('user/add','UserController@add');
// 后台保存页面
    Route::post('user/store','UserController@store');

// 后台修改页面
    Route::get('user/edit/{id}','UserController@edit'); 
    Route::post('user/update/{id}','UserController@update');
// 后台用户删除页面
    Route::get('user/delete/{id}','UserController@delete');

// 前台用户禁用
     Route::get('quser/jinyong/{id}','UserController@jinyong');
// 前台用户开通
     Route::get('quser/kaitong/{id}','UserController@kaitong');
// 前台用户列表
     Route::get('quser/list','UserController@qlist');

//广告位路由设置
    Route::resource('home_ad','Home_adController');

});

//友情链接
Route::resource('/admin/links','Admin\LinksController')->middleware('islogin');

//广告合作
Route::get('/home/gghz',function (){
    return view('home.home_ad.gghz');
});


//---------------------------前台


//前台登录
Route::get('/', 'Home\HomeController@index');

Route::get('/login','Home\LoginController@login');

Route::post('/login/dologin','Home\LoginController@dologin');

Route::get('/login/outlogin','Home\LoginController@outlogin');


//前台注册
Route::get('/register','Home\LoginController@register');

Route::post('/register/store','Home\LoginController@store');

//设置个人信息页
Route::get('home/details','Home\DetailsController@index')->middleware('isHomelogin');
Route::post('/home/details/update','Home\detailsController@update')->middleware('isHomelogin');


//前台菜谱管理

//菜谱列表页
Route::get('/list/{id}','Home\ListController@index');
Route::post('/list/{id}','Home\ListController@index');
Route::get('/search/','Home\ListController@search');
Route::get('/cate/{id}','Home\CateController@index');

//菜谱管理
Route::get('/recipe/delete','Home\RecipeController@destroy')->middleware('isHomelogin');
Route::resource('/recipe','Home\RecipeController')->middleware('isHomelogin');



// 前台收藏
Route::get('/home/dianzan','Home\CollectController@index')->middleware('isHomelogin');
Route::get('/home/add','Home\CollectController@add')->middleware('isHomelogin');
Route::get('/home/delete','Home\CollectController@delete')->middleware('isHomelogin');
Route::get('/home/shoucang','Home\CollectController@shoucang')->middleware('isHomelogin');






//-----------------------我的厨房模块---------------------
Route::get('/home/chufang','Home\KitchenController@index');

//菜谱
Route::get('/home/chufang/caipu','Home\KitchenController@caipu');

//作品
Route::get('/home/chufang/zuopin','Home\KitchenController@zuopin');

//菜单
Route::get('/home/chufang/caidan','Home\KitchenController@caidan');




//-----------------------我的厨房模块结束---------------------



//分类路由
Route::get('/admin/cate/create/{id}','Admin\CateController@create');
Route::resource('/admin/cate','Admin\CateController');



// 后台修改页面
//Route::get('admin/user/edit/{id}','Admin\UserController@edit');
//Route::post('admin/user/update/{id}','Admin\UserController@update');
//// 后台用户删除页面
//Route::get('admin/user/delete/{id}','Admin\UserController@delete');

Route::get('home/other_details/{id}','Home\other_detailsController@index');
Route::get('home/other_details/caipu/{id}','Home\other_detailsController@caipu');
Route::get('home/other_details/zuopin/{id}','Home\other_detailsController@zuopin');




