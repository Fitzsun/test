@extends('layouts.app')

@section('title')
  新风系统
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/newSys.css') }}">
@endsection

@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/newBanner.jpg) no-repeat scroll center;
    }
    #main .chooseReason>.fog{
      background:url(/static/images/fog.jpg) no-repeat scroll right center;
    }
    .love>p{
      background: url(/static/images/loveBg.png) no-repeat scroll 61% center;
    }
  </style>
<div id="banner"></div>
<section id="main">
  <main>
    <ul class="list-icons clearfix animate-this">
      <li>
        <dl>
          <dd><img src="/static/images/brand.png" alt=""></dd>
          <dd>PREMIUM BRAND</dd>
          <dt>一线品牌</dt>
        </dl>
      </li>
      <li>
        <dl>
          <dd><img src="/static/images/focus.png" alt=""></dd>
          <dd>PROFESSIONAL AND FOCUSED</dd>
          <dt>专业专注</dt>
        </dl>
      </li>
      <li>
        <dl>
          <dd><img src="/static/images/advanced.png" alt=""></dd>
          <dd>INDUSTRY LEADING</dd>
          <dt>行业领先</dt>
        </dl>
      </li>
      <li>
        <dl>
          <dd><img src="/static/images/afterService.png" alt=""></dd>
          <dd>INTIMATE AFTER-SALES</dd>
          <dt>贴心售后</dt>
        </dl>
      </li>
    </ul>
    <div class="newAir">
      <ul class="list-tabs clearfix animate-this">
        <li class="active"><a href="#tab1">家用新风</a><i></i></li>
        <li><a href="#tab2">别墅新风</a><i></i></li>
        <li><a href="#tab3">商用新风</a><i></i></li>
        <li><a href="#tab4">配件系列</a><i></i></li>
      </ul>
      <div class="tab-container animate-this">
        <ul id="tab1" class="list-items tab-content">
        @foreach($products as $product)
          <li>
            <dl>
              <dd><img src="{{ $product->product_thumbnail_url }}" alt=""></dd>
              <dt>{{ $product->product_name }}</dt>
              <dd><a href="#">快速报价</a></dd>
            </dl>
          </li>
        @endforeach
        </ul>
        <div id="tab2" class="tab-content">
          <h1>这是第二个Tab页</h1>
        </div>
        <div id="tab3" class="tab-content">
          <h1>这是第三个Tab页</h1>
        </div>
        <div id="tab4" class="tab-content">
          <h1>这是第四个Tab页</h1>
        </div>
      </div>
      
      <p><a href="#">更多→</a></p>
    </div>
    <div class="chooseReason animate-this">
      <p>WHY CHOOSE VENTILATION SYSTEM</p>
      <div class="fog">
        <p>雾霾围城，穹顶之下<br>PM2.5无处不在<br>你的肺还好吗？<br>你的家人还好吗？我们的安全感无处安放<br>相关报道说<br>尽量减少外出<br>实际情况是<br>由于室内空气不流通<br>室内污染物的浓度远远高于室外<br>每一口呼吸<br>都等于慢性中毒</p>
      </div>
    </div>
    <div class="love animate-this">
      <ul class="loveWho">
        <li><img src="/static/images/loveStudent.jpg" alt=""></li>
        <li><img src="/static/images/loveStuff.jpg" alt=""></li>
        <li><img src="/static/images/loveOlder.jpg" alt=""></li>
        <li><img src="/static/images/lovePregnant.jpg" alt=""></li>
        <li><img src="/static/images/loveBaby.jpg" alt=""></li>
      </ul>
      <p>关爱，从华夏新风开始，从简单呼吸开始</p>
    </div>
  </main>
</section>
</div>
<div id="content-bot">
  <div class="friendly-link animate-this">
    <p>友情链接</p>
    <ul class="clearfix">
      @foreach($links as $link)
        <li><a href="{{ $link->link_href }}">{{ $link->link_name }}</a></li>
      @endforeach
    </ul> 
  </div>
</div>
@endsection