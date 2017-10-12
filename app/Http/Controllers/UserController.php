<?php

namespace App\Http\Controllers;

use App\Links;
use App\Success;
use App\Category;
use App\ProductNav;
use Illuminate\Http\Request;
// 在view.php中配置前端页面的目录位置
// 使其识别html php结尾的文件 
// \View::addExtension('html', 'php'); 是程序识别html和PHP结尾的视图文件

class UserController extends Controller
{
    public function index()
    {
        // get()获取的是一个集合 [{"id":8,"parent_id":0,"name":"\u6210\u529f\u6848\u4f8b","en_name":"success","path":"\/success","description":"desc","image_url":"","created_at":"2017-10-11 07:47:26","updated_at":"2017-10-11 07:47:26"}]
        $success = Category::where('name', '=', '成功案例')->first();
        $desc = Category::where('name','=','公司简介')->first();
        $successList = Success::take(5)->get();
        return view('index.page',compact('success','desc','successList'));
    }

    public function about()
    {
        // 三种查询数据库方式  原始查询 查询构造器 ORM对象关系模型
        // 在视图中共享数据 需要在 AppServiceProvider.php的boot方法中使用 view()->share() 导航中也会用到
        // $links = Links::all();
        // 将查询到的结果赋值给模板变量
        return view('aboutUs.page');
    }

    public function airTest()
    {
        return view('airTest.page');
    }

    public function news()
    {
        return view('newsCenter.page');
    }

    public function newsDetail()
    {
        return view('newsCenterDetail.page');
    }

    public function newSys()
    {
        return view('newSystem.page');
    }

    public function product()
    {
        $navs =ProductNav::with('allChildrenNavs')->get();
        return view('productCenter.page',compact('navs'));
    }

    public function productDetail()
    {
        return view('productCenterDetail.page');
    }

    public function success()
    {
        return view('success.page');
    }

    public function treatment()
    {
        return view('treatment.page');
    }
}
