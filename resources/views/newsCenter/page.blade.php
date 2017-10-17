@extends('layouts.app')

@section('title')
  新闻中心
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/news.css') }}">
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
    <aside>
      <dl>
        <dt>新闻中心</dt>
        <dd>news center</dd>
        <dd>
          <svg width="75" height="4" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <line x1="0" y1="2" x2="32" y2="2" stroke="#fff" stroke-width="1"/>
            <circle cx="37" cy="2" r="1" fill="#fff"/>
            <line x1="72" y1="2" x2="42" y2="2" stroke="#fff" stroke-width="1"/>
          </svg>
        </dd>
      </dl>
      <nav>
        <ul class="list-tabs">
          <li><a href="#tab1">公司新闻</a></li>
          <li><a href="#tab2">行业资讯</a></li>
        </ul>
      </nav>
    </aside>
    <div class="content">
      <div>
        <ul id="tab1" class="list-items tab-content">
          @foreach($news as $new)
            <li>
              <dl>
                <dt>{{ $new->title }}</dt>
                <dd>{{ $new->publish_at }}</dd>
                <dd>
                  <p>
                  {{ $new->meta_description }}
                  </p>
                </dd>
                <dd><a href="#">详细&gt;&gt;</a></dd>  
              </dl>
              <div><img src="{{ $new->sm_image_url }}" alt="居家标配"></div>
            </li>
          @endforeach
          {{--  <li>
            <dl>
              <dt>安装新风机是现代家居新标配，新风将普及到家家户户</dt>
              <dd>2017-06-25</dd>
              <dd>
                <p>
                  新风机有三个基本的功能让你自由呼吸；<br/>
                  第一个是通风，这个不言而喻，是最基本的功能；<br/>
                  第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；
                </p>
              </dd>
              <dd><a href="#">详细&gt;&gt;</a></dd>  
            </dl>
            <div><img src="/static/images/news2.jpg" alt="居家标配"></div>
          </li>
          <li>
            <dl>
              <dt>安装新风机是现代家居新标配，新风将普及到家家户户</dt>
              <dd>2017-06-25</dd>
              <dd>
                <p>
                  新风机有三个基本的功能让你自由呼吸；<br/>
                  第一个是通风，这个不言而喻，是最基本的功能；<br/>
                  第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；
                </p>
              </dd>
              <dd><a href="#">详细&gt;&gt;</a></dd>  
            </dl>
            <div><img src="/static/images/news1.jpg" alt="居家标配"></div>
          </li>
          <li>
            <dl>
              <dt>安装新风机是现代家居新标配，新风将普及到家家户户</dt>
              <dd>2017-06-25</dd>
              <dd>
                <p>
                  新风机有三个基本的功能让你自由呼吸；<br/>
                  第一个是通风，这个不言而喻，是最基本的功能；<br/>
                  第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；
                </p>
              </dd>
              <dd><a href="#">详细&gt;&gt;</a></dd>  
            </dl>
            <div><img src="/static/images/news2.jpg" alt="居家标配"></div>
          </li>
          <li>
            <dl>
              <dt>安装新风机是现代家居新标配，新风将普及到家家户户</dt>
              <dd>2017-06-25</dd>
              <dd>
                <p>
                  新风机有三个基本的功能让你自由呼吸；<br/>
                  第一个是通风，这个不言而喻，是最基本的功能；<br/>
                  第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；
                </p>
              </dd>
              <dd><a href="#">详细&gt;&gt;</a></dd>  
            </dl>
            <div><img src="/static/images/news1.jpg" alt="居家标配"></div>
          </li>
          <li>
            <dl>
              <dt>安装新风机是现代家居新标配，新风将普及到家家户户</dt>
              <dd>2017-06-25</dd>
              <dd>
                <p>
                  新风机有三个基本的功能让你自由呼吸；<br/>
                  第一个是通风，这个不言而喻，是最基本的功能；<br/>
                  第二个功能是热回收，就是把进入室内的新鲜空气和室内要排出的污浊空气之间进行能量交换，让污浊空气排出的同时能量却留了下来。通过热回收，送入室内的新鲜空气的温度接近室内温度，体感舒适，并且运行经济，节能环保；
                </p>
              </dd>
              <dd><a href="#">详细&gt;&gt;</a></dd>  
            </dl>
            <div><img src="/static/images/news2.jpg" alt="居家标配"></div>
          </li>  --}}
        </ul>
        <div id="tab2" class="tab-content">
          <h1>这是第二个标签页</h1>
        </div>
      </div>
      @include('pagination.default', ['paginator' => $news])
      

      {{--  <div class="pagination">
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
      </div>  --}}
    </div>
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
