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
Route::get('/', function () {
    return view('welcome');
});

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


