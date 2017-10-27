<?php

use App\Slides;
use Illuminate\Http\Response;

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

// 这是一个bug吗? 写成下边这样会出现Undefined variable: desc错误,变量没有赋值给模板
// Route::get('/', function () {
//     return view('index.page');
// });

// 这样就行了
Route::get('/', function(){
    return view('index.page');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 路由集群(可嵌套命名空间,路由前缀,子域名路由,路由参数,路由限制) 'middleware' => ['auth']
Route::group(['prefix' => 'dashboard'], function () {
    // path参数; ?可有可无(0和1); 参数都用大括号括起来; where对其进行限制(正则); /正则中需要用\反斜杠进行转义 \w字母数字和下划线 * 0~正无穷  + 1~正无穷
    Route::get('{path?}','HomeController@dashboard')->where('path','[\/\w\.-]*');
});

// 使用路由群组,使用路由前缀,专门用来处理ajax请求,返回公用的头和尾
// Route::group(['prefix' => 'ajax'], function () {
//     Route::get('/links','AjaxController@links');
// });



// Route::get('/index', ['as' => 'index',function(){}]);
Route::get('index', 'UserController@index');
Route::get('about', 'UserController@about');
Route::get('airTest', 'UserController@airTest');
Route::get('news', 'UserController@news');
Route::get('newsDetail', 'UserController@newsDetail');
Route::get('newSys', 'UserController@newSys');
Route::get('product', 'UserController@product');
Route::get('product/{product_id}', function($product_id){
    // $product = Product::find($arg2)->get();
    // return view('productCenterDetail.page',compact('product'));
});

Route::group(['prefix' => 'productDetail'], function () {
    Route::get('{product_id}', 'UserController@productDetail');
});

Route::get('success', 'UserController@success');
// Route::get('/treatment', 'UserController@treatment');
// 先搞懂业务逻辑再配置路由,产品中心->产品详情->产品类别->产品id->客户提交的表单  提交后的动作('提示提交成功按钮')
Route::view('/treatment','treatment.page',['name' => 'Laravel学院']);


// 下述方法报错: 
// Route::get('/index', function(){
//     return view()->file('/public/page.html');
// });
// Route::get('/index/{id}', 'UserController@fuck');
// Route::resource('/index', 'TaskController');


