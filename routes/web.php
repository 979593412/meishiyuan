<?php

//admin后台主页面;

Route::resource('/admin/fenlei','admin\CarouselController');


//前台页面
Route::get('/', 'Home\HomeController@index');

Route::get('/login','Home\LoginController@login');

Route::post('/login/dologin','Home\LoginController@dologin');

Route::get('/login/outlogin','Home\LoginController@outlogin');

Route::get('/register','Home\LoginController@register');

Route::post('/register/store','Home\LoginController@store');



//菜谱管理
Route::resource('/recipe','Home\RecipeController')->middleware('islogin');




//广告位路由设置
Route::resource('/admin/home_ad','Admin\Home_adController');




//友情链接
Route::resource('/admin/links','Admin\LinksController');
