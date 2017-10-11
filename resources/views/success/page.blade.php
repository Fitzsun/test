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
        <li>
          <div>
            <img src="/static/images/succCase1.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase2.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase3.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase4.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase5.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase6.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase1.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
        <li>
          <div>
            <img src="/static/images/succCase2.jpg" alt="学而思培优甲醛治理">
          </div>
          <dl>
            <dt>学而思培优甲醛治理</dt>
            <dd>服务时间：<span>2016.05.08</span></dd>
            <dd>建筑面积：<span>5000平方米</span></dd>
            <dd>
              <span>服务内容：</span>
              <p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标注。</p>
            </dd>
          </dl>
        </li>
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
    <div class="pagination">
      <a href="#">首页</a>
      <a href="#">上一页</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">...</a>
      <a href="#">下一页</a>
      <a href="#">尾页</a>
      <a>共<span>10</span>页</a>
    </div>
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