@extends('layouts.app')

@section('title')
  产品中心
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
@endsection


@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/proBanner.jpg) no-repeat scroll center;
    }
    button[type="submit"]{
      background: url(/static/images/proSubmit.png) no-repeat scroll center;
    }
  </style>
<div id="banner"></div>
<div class="detailContainer">
  <div class="proAppearance">
    <div class="left">
      <nav>
        <i class="icon-locationIcon"></i>
        <span>位置：</span>
        <ul class="bread-crumbs">
          <li><a href="#">产品中心</a>&gt;&gt;</li>
          <li><a href="#">{{ $product->category_id }}</a>&gt;&gt;</li>
          <li><a href="#">{{ $product->name }}</a></li>
        </ul>
      </nav>
      <div class="pictureShow">
        <p>家用壁挂式新风系统</p>
        <div><img src="/static/images/proShow.png" alt="新风系统展示"></div>
      </div>
    </div>
    <div class="right-form">
      <p>快速报价</p>
      <p>我们会尽快通过电话给您做出详细报价，您也可以立即致电188-0022-2288</p>
      
      <!-- action="" method="" enctype="" -->
      <form>
        <input type="text" placeholder="姓名" name="name" id="name" onfocus="this.placeholder=''" onblur="this.placeholder='姓名'">
        <input type="tel" name="phone" id="phnoe" placeholder="电话" onfocus="this.placeholder=''" onblur="this.placeholder='电话'">
        <input type="text" name="area" id="area" placeholder="房屋面积/汽车型号" onfocus="this.placeholder=''" onblur="this.placeholder='房屋面积/汽车型号'">
        <button type="submit"><a href="{{  }}">提交</a></button>
      </form>

    </div>
  </div>
  <div class="parameters">
    <ul class="list-tabs">
      <li><a href="#tab1" title="商品介绍">商品介绍</a></li>
      <li><a href="#tab2" title="商品参数">商品参数</a></li>
    </ul>
    <div class="line"></div>
    <div class="tab-container">
      <div id="tab1" class="tab-content">
        <img src="/static/images/proDesc.jpg" alt="商品介绍">
      </div>
      <div id="tab2" class="tab-content">
        <h1>这是第二个标签</h1>
      </div>
    </div>
  </div>
</div>
</div>
<div id="content-bot">
  <div class="friendly-link">
    <p>友情链接</p>
    <ul class="clearfix">
      @foreach($links as $link)
        <li><a href="{{ $link->link_href }}">{{ $link->link_name }}</a></li>
      @endforeach
    </ul> 
  </div>
</div>
@endsection