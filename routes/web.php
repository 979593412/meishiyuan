<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//轮播图----------------------------------------------------
//admin后台主页面;

Route::resource('/admin/fenlei','admin\CarouselController');



//前台页面

Route::get('/', 'Home\HomeController@index');

Route::get('/login','Home\LoginController@login');

Route::post('/login/dologin','Home\LoginController@dologin');

Route::get('/login/outlogin','Home\LoginController@outlogin');

Route::get('/register','Home\LoginController@register');

Route::post('/register/store','Home\LoginController@store');


//广告位路由设置
Route::resource('/admin/home_ad','Admin\Home_adController');
Route::get('/home/gghz',function (){
    return view('home.home_ad.gghz');
});

Route::get('home/details',function (){
    return view('home.details.details');
});




Route::resource('/admin/links','Admin\LinksController');


//login 后台登录
Route::get('/admin/logins','Admin\LoginController@login');
//生成路由的验证码
Route::get('/admin/code','Admin\LoginController@code');

// 第三方验证码生成  gregwar/captcha 插件 Packagist
//Route::get('/code/captcha/{id}','Admin\LoginController@captcha');

//登录验证
Route::post('/admin/dologin','Admin\LoginController@dologin');





// 后台用户列表页面
Route::get('/admin/user/list','Admin\UserController@list');
// 后台用户添加页面
Route::get('admin/user/add','Admin\UserController@add');
// 后台保存页面
Route::post('admin/user/store','Admin\UserController@store');

// 后台修改页面
Route::get('admin/user/edit/{id}','Admin\UserController@edit');
Route::post('admin/user/update/{id}','Admin\UserController@update');
// 后台用户删除页面
Route::get('admin/user/delete/{id}','Admin\UserController@delete');
