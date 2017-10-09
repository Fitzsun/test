<?php

namespace App\Http\Controllers;

// use App\Links;
use Illuminate\Http\Request;
// 在view.php中配置前端页面的目录位置
// 使其识别html php结尾的文件 
\View::addExtension('html', 'php');

class UserController extends Controller
{
    public function index()
    {
        
        return view('index.page');
    }

    public function about()
    {
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
