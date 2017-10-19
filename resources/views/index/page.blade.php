@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div id="wrapper">

    <style type="text/css">
      #smbanner{
        width:100%;
        height:238px;
        margin:50px 0;
        background:url(/static/images/smbanner.png) no-repeat scroll center;
      }
    </style>
  <div class="carousel-container" class="clearfix">
    <div class="bd">
      <ul class="carousel-inner clearfix">
        @foreach($slides1 as $slide)
          <li>
            <a href="{{ $slide->path }}"><img class="img-responsive" src="{{ $slide->imgUrl }}" alt=""></a>
          </li>
        @endforeach
      </ul>
    </div>
    <ol class="clearfix carousel-indicator">
      <li class="active"></li>
      <li></li>
      <li></li>
    </ol>
    <!-- 设置轮播控制器 -->
    <a class="carousel-control prev" href="#"><span class="icon icon-prevSlide"></span></a>
    <a class="carousel-control next" href="#"><span class="icon icon-nextSlide"></span></a>
  </div>
  <section id="desc">
    <main>
      <div class="desc-list overflow clearfix overflow-scroll">
        <dl class="hiding animated service" data-animation="fadeInRight" data-delay="600">
          <dt>甲醛治理</dt>
          <dd>室内车内甲醛治理，还你清新呼吸</dd>
          <dd><img src="/static/images/Formaldehyde.png" alt=""></dd>
          <dd><a href="/treatment">查看详情</a></dd>
        </dl>
        <dl class="hiding animated service" data-animation="fadeInDown" data-delay="300">
          <dt>新风系统</dt>
          <dd>让呼吸更自由，远离雾霾等伤害</dd>
          <dd><img src="/static/images/newSystem.png" alt=""></dd>
          <dd><a href="/newSys">查看详情</a></dd>
        </dl>
        <dl class="hiding animated service" data-animation="fadeInLeft" data-delay="600">
          <dt>室内空气检测</dt>
          <dd>对身边的空气环境全方位了解</dd>
          <dd><img src="/static/images/airTest.png" alt=""></dd>
          <dd><a href="/airTest">查看详情</a></dd>
        </dl>
      </div>
      <div class="product-center">
        <p>产品中心<span>Product center of Huaxiajunan</span></p>
        <ul class="clearfix">
          <li>
            <a href="#"><span>华夏君安产品中心</span></a>
          </li>
          @for($i=0;$i<3;$i++)
              <li class="hiding animated" data-animation="fadeInUp" data-delay="{{ ($i+1)*300 }}">
                <a href="#">
                  <i>{{ $products[$i]->product_name }}</i>
                  <img src="{{ $products[$i]->product_thumbnail_url }}" alt="">
                </a>
              </li>
          @endfor
        </ul>
        <ul class="clearfix">
          @for($i=3;$i<=5;$i++)
            <li class="hiding animated" data-animation="fadeInUp" data-delay="{{ ($i+1)*300 }}" >
              <a href="#">
                <i>{{ $products[$i]->product_name }}</i>
                <img src="{{ $products[$i]->product_thumbnail_url }}" alt="">
              </a>
            </li>
          @endfor
        </ul>
      </div>
      <div class="company-desc">
        <p>{{ $desc->name }}<span>{{ $desc->en_name }}</span></p>
        <p>{{ $desc->description  }}</p>
      </div>
    </main>
  </section>
  <div id="smbanner" class="animate-this"></div>
  <section id="bottom">
    <main>
      <div class="successful-cases">
        <p class="animate-this">{{ $success->name }}<span>{{ $success->en_name}}</span></p>
        <div class="list-items animate-this">
          <ul class="clearfix">
            @foreach($successList as $key=>$li)
            <li class="hiding animated" data-animation="fadeInUp" data-delay="{{ ($key+1)*300 }}">
              <div>
                <img src="{{ $li->sm_image_url }}" alt="">
              </div>
              <dl>
                <dt>{{ $li->title }}</dt>
                <dd>服务时间：{{ $li->serve_time }}</dd>
                <dd>建筑面积：{{ $li->area }}</dd>
                <dd>服务内容：<p>{{ $li->serve_content }}</p></dd>
              </dl>
              <span></span>
            </li>
            @endforeach
          </ul>
          <a href="#">查看更多</a>
        </div>
      </div>
      <div class="honor">
        <p class="animate-this">荣誉资质<span>Honor and qualification of Huaxiajunan</span></p>
        <ul class="clearfix animate-this">
        @foreach($honors as $key=>$honor)
          <li class="hiding animated" data-animation="fadeInRight" data-delay="{{ ($key+1)*300 }}">
            <div>
              <img src="{{ $honor->honor_image_url }}" alt="">
            </div>
            <p>{{ $honor->name }}</p>
          </li>
        @endforeach
        </ul>
        <ul class="clearfix animate-this">
          <li>
            <div><img src="/static/images/advantage1.png" alt=""></div>
            <dl>
              <dt><span>多年经验<i></i></span></dt>
              <dd>从事室内空气治理多年经验丰富</dd>
            </dl>
          </li>
          <li>
            <div><img src="/static/images/advantage2.png" alt=""></div>
            <dl>
              <dt><span>多年经验<i></i></span></dt>
              <dd>从事室内空气治理多年经验丰富</dd>
            </dl>
          </li>
          <li>
            <div><img src="/static/images/advantage3.png" alt=""></div>
            <dl>
              <dt><span>多年经验<i></i></span></dt>
              <dd>从事室内空气治理多年经验丰富</dd>
            </dl>
          </li>
          <li>
            <div><img src="/static/images/advantage4.png" alt=""></div>
            <dl>
              <dt><span>多年经验<i></i></span></dt>
              <dd>从事室内空气治理多年经验丰富</dd>
            </dl>
          </li>
        </ul>
      </div>
      <div class="news animate-this">
        <p>新闻资讯</p>
        <div class="clearfix">
            <div id="slidy-container"> 
              <figure id="slidy"> 
                @foreach($news as $new)
                  <img src="{{ $new->lg_image_url }}" alt="jQuery仿淘宝商品多属性查询" data-caption="{{ $new->title }}">
                  {{--  <img src="/static/images/newsCarousel1.jpg" alt="jQuery结合elevateZoom演示多种放大镜效果" data-caption="jQuery结合elevateZoom演示多种放大镜效果"> 
                  <img src="/static/images/newsCarousel1.jpg" alt="百度编辑器ueditor" data-caption="百度编辑器ueditor">  --}}
                @endforeach
              </figure> 
            </div> 
          <!-- </div> -->
          <ul class="list-news">
            @foreach($news as $new)
              <li><a href="/newsDetail">&gt; {{ $new->title }}</a><span>{{ $new->publish_at }}</span></li>
            @endforeach
          </ul>
        </div>
      </div>
    </main>
  </section>

  </div>

  @include('links.page')
@endsection

@section('scripts')
  @parent
  <script src="{{ asset('js/index.js') }}"></script>
@endsection