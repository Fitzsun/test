@extends('layouts.app')

@section('title')
  新闻中心
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/newsDetail.css') }}">
@endsection

@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/newsBanner.jpg) no-repeat scroll center;
    }
  </style>
<div id="banner"></div>
<section>
  <main>
    <div class="content">
      <nav class="bread-crumbs">
        <i class="icon-locationIcon"></i>
        位置：
        <a href="#">新闻中心&gt;&gt;</a>
        <a href="#">安装新风机是现代家居新标配，新风机将普及到家家户户</a>
      </nav>
      <h3>安装新风机是现代家居新标配，新风机将普及到家家户户<span>2017-08-11</span></h3>
      <p>
        新风机有三个基本的功能让你自由呼吸<br/>
        第一个是通风，这个不言而喻，是最基本的功能；<br/>
        第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；<br/>
      </p>
      <div><img src="/static/images/newsDetail.jpg" alt=""></div>
      <p>第三个基本功能也正是针对目前的大雾天气的，那就是过滤功能。好的新风机的过滤一般都能达到很高的级别，室外的可吸入颗粒物（如各种粉尘、灰尘、烟尘等）在进入室内之前均可有效过滤。</p>
      <p>新风机能持续不断的将室内污浊空气及时排出，同时引入室内新鲜空气，并有效控制风量大小、增加能量回收；营造健康良好的室内高品质生活环境，为居民打造健康节能环境。</p>
      <p>
        新风机有三个基本的功能让你自由呼吸<br/>
        第一个是通风，这个不言而喻，是最基本的功能；<br/>
        第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；<br/>
      </p>
      <p>第三个基本功能也正是针对目前的大雾天气的，那就是过滤功能。好的新风机的过滤一般都能达到很高的级别，室外的可吸入颗粒物（如各种粉尘、灰尘、烟尘等）在进入室内之前均可有效过滤。</p>
      <p>新风机能持续不断的将室内污浊空气及时排出，同时引入室内新鲜空气，并有效控制风量大小、增加能量回收；营造健康良好的室内高品质生活环境，为居民打造健康节能环境。</p>
    </div>
    <aside class="aside">
      <dl class="news-list">
        <dt><i class="icon icon-newsTitle"></i><span>热点资讯</span></dt>
        <dd><i class="icon-newsArrow"></i><a href="#">新风系统有用吗？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">新房装修时就可以入住？怎样知道甲醛含量？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">光触媒除甲醛会不会有二次污染问题？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">刚装修的新房，除甲醛用的活性炭应该多久换一次？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">办公室净化空气，应该选择新风系统还是空气净化...</a></dd>
      </dl>
      <dl class="news-list">
        <dt><i class="icon icon-newsTitle"></i><span>最新动态</span></dt>
        <dd><i class="icon-newsArrow"></i><a href="#">新风系统有用吗？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">新房装修时就可以入住？怎样知道甲醛含量？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">光触媒除甲醛会不会有二次污染问题？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">刚装修的新房，除甲醛用的活性炭应该多久换一次？</a></dd>
        <dd><i class="icon-newsArrow"></i><a href="#">办公室净化空气，应该选择新风系统还是空气净化...</a></dd>
      </dl>
      <div class="aside-logo"><img src="/static/images/asideLogo.jpg" alt="华夏君安"></div>
      <div><img src="/static/images/workhard.png" alt="为室内空气质量，我们一直在努力"></div>
    </aside>
  </main>
</section>
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