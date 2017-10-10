<?php

namespace App\Http\Controllers;

use App\Links;
use Illuminate\Http\Request;
// 在view.php中配置前端页面的目录位置
// 使其识别html php结尾的文件 
// \View::addExtension('html', 'php'); 是程序识别html和PHP结尾的视图文件

class UserController extends Controller
{
    public function index()
    {
        
        return view('index.page');
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

    public function newsCenterDetail()
    {
        return view('newsCenterDetail.page');
    }

    public function newSys()
    {
        return view('newSystem.page');
    }

    public function product()
    {
        return view('productCenter.page');
    }

    public function productCenterDetail()
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
