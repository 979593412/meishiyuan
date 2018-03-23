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




Route::resource('/admin/links','Admin\LinksController');
