@extends('layouts.app')

@section('title')
  成功案例
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/success.css') }}">
@endsection

@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/succBanner.jpg) no-repeat scroll center;
    }
  </style>
<div id="banner"></div>
<section>
  <div class="wrapper">
    <ul class="list-tabs clearfix">
      <li class="active"><a href="#tab1">室内除甲醛</a><i></i></li>
      <li><a href="#tab2">车内除甲醛</a><i></i></li>
      <li><a href="#tab3">新风系统</a><i></i></li>
      <li><a href="#tab4">空气检测</a><i></i></li>
    </ul>
    <div class="tab-container">
      <ul id="tab1" class="list-items tab-content">
        @foreach($successList as $key=>$li)
          <li class="hiding animated" data-animation="fadeInRight" data-delay="{{ ($key+1)*100 }}">
            <div>
              <img src="{{ $li->sm_image_url }}" alt="学而思培优甲醛治理">
            </div>
            <dl>
              <dt>{{ $li->title }}</dt>
              <dd>服务时间：<span>{{ $li->serve_time }}</span></dd>
              <dd>建筑面积：<span>{{ $li->area }}</span></dd>
              <dd>
                <span>服务内容：</span>
                <p>{{ $li->serve_content }}</p>
              </dd>
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
    @include('pagination.default', ['paginator' => $successList])
  </div>
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