<?php


//轮播图----------------------------------------------------
//admin后台主页面;

Route::resource('/admin/fenlei','admin\CarouselController');

//login 后台登录
Route::get('/admin/logins','Admin\LoginController@login');
//生成路由的验证码
Route::get('/admin/code','Admin\LoginController@code');

// 第三方验证码生成  gregwar/captcha 插件 Packagist
//Route::get('/code/captcha/{id}','Admin\LoginController@captcha');


//登录验证
Route::post('/admin/dologin','Admin\LoginController@dologin');

//首页
Route::get('/admin/index','Admin\LoginController@index');


//前台页面

Route::get('/', 'Home\HomeController@index');

Route::get('/login','Home\LoginController@login');

Route::post('/login/dologin','Home\LoginController@dologin');

Route::get('/login/outlogin','Home\LoginController@outlogin');

Route::get('/register','Home\LoginController@register');

Route::post('/register/store','Home\LoginController@store');


//广告位路由设置
Route::resource('/admin/home_ad','Admin\Home_adController');




Route::resource('/admin/links','Admin\LinksController');
