<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
});

//后台登陆路由



//建立后台路由
Route::group([],function(){
	
	//后台首页
	Route::get('admin/index','Admin\IndexController@index');
	
	//后台用户列表界面
	Route::get('admin/user/index','Admin\UserController@index');
});
