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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 路由集群(可嵌套命名空间,路由前缀,子域名路由,路由参数,路由限制) 'middleware' => ['auth']
Route::group(['prefix' => 'dashboard'], function () {
    // path参数; ?可有可无(0和1); 参数都用大括号括起来; where对其进行限制(正则); /正则中需要用\反斜杠进行转义 \w字母数字和下划线 * 0~正无穷  + 1~正无穷
    Route::get('{path?}','HomeController@dashboard')->where('path','[\/\w\.-]*');
});
