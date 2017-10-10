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
        <li class="show">
          <a href="#"><img class="img-responsive" src="/static/images/banner.jpg" alt=""></a>
          <dl class="carousel-caption">
            <dt></dt>
            <dd></dd>
          </dl>
        </li>
        <li>
          <a href="#"><img class="img-responsive" src="/static/images/newBanner.jpg" alt=""></a>
        </li>
        <li>
          <a href="#"><img class="img-responsive" src="/static/images/testBanner.jpg" alt=""></a>
        </li>
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
      <div class="desc-list overflow clearfix">
        <dl>
          <dt>甲醛治理</dt>
          <dd>室内车内甲醛治理，还你清新呼吸</dd>
          <dd><img src="/static/images/Formaldehyde.png" alt=""></dd>
          <dd><a href="#">查看详情</a></dd>
        </dl>
        <dl>
          <dt>新风系统</dt>
          <dd>让呼吸更自由，远离雾霾等伤害</dd>
          <dd><img src="/static/images/newSystem.png" alt=""></dd>
          <dd><a href="#">查看详情</a></dd>
        </dl>
        <dl>
          <dt>室内空气检测</dt>
          <dd>对身边的空气环境全方位了解</dd>
          <dd><img src="/static/images/airTest.png" alt=""></dd>
          <dd><a href="#">查看详情</a></dd>
        </dl>
      </div>
      <div class="product-center">
        <p>产品中心<span>Product center of Huaxiajunan</span></p>
        <ul class="clearfix">
          <li>
            <a href="#"><span>华夏君安产品中心</span></a>
          </li>
          <li>
            <a href="#"><span>霍尼韦尔T30新风系统</span></a>
            <img src="/static/images/product2.png" alt="">
          </li>
          <li>
            <a href="#"></a>
            <img src="/static/images/product3.png" alt="">
          </li>
          <li>
            <a href="#"></a>
            <img src="/static/images/product4.png" alt="">
          </li>
        </ul>
        <ul class="clearfix">
          <li>
            <a href="#"><span>华夏君安产品中心</span></a>
            <img src="/static/images/product2.png" alt="">
          </li>
          <li>
            <a href="#"></a>
            <img src="/static/images/product3.png" alt="">
          </li>
          <li>
            <a href="#"></a>
            <img src="/static/images/product4.png" alt="">
          </li>
        </ul>
      </div>
      <div class="company-desc">
        <p>公司简介<span>Company profile of Huaxiajunan</span></p>
        <p>北京华夏君安科技有限公司，是一家从2010年起专业从事室内空气治理服务单位，是国内最早开发和拓展改领域的先驱者之一，华夏君安紧跟时代需要，为室内空气质量贡献自己微薄的力量。我们一直在努力！</p>
      </div>
    </main>
  </section>
  <div id="smbanner"></div>
  <section id="bottom">
    <main>
      <div class="successful-cases">
        <p>成功案例<span>Successful cases of Huaxiajunan</span></p>
        <div class="list-items">
          <ul class="clearfix">
            <li>
              <div>
                <img src="/static/images/case1.jpg" alt="">
              </div>
              <dl>
                <dt>融恒嘉汇空气治理</dt>
                <dd>服务时间：2016.05.08</dd>
                <dd>建筑面积：5000平方米</dd>
                <dd>服务内容：<p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标准</p></dd>
              </dl>
              <span></span>
            </li>
            <li>
              <div>
                <img src="/static/images/case2.jpg" alt="">
              </div>
              <dl>
                <dt>融恒嘉汇空气治理</dt>
                <dd>服务时间：2016.05.08</dd>
                <dd>建筑面积：5000平方米</dd>
                <dd>服务内容：<p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标准</p></dd>
              </dl>
              <span></span>
            </li>
            <li>
              <div>
                <img src="/static/images/case3.jpg" alt="">
              </div>
              <dl>
                <dt>融恒嘉汇空气治理</dt>
                <dd>服务时间：2016.05.08</dd>
                <dd>建筑面积：5000平方米</dd>
                <dd>服务内容：<p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标准</p></dd>
              </dl>
              <span></span>
            </li>
            <li>
              <div>
                <img src="/static/images/case4.jpg" alt="">
              </div>
              <dl>
                <dt>融恒嘉汇空气治理</dt>
                <dd>服务时间：2016.05.08</dd>
                <dd>建筑面积：5000平方米</dd>
                <dd>服务内容：<p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标准</p></dd>
              </dl>
              <span></span>
            </li>
            <li>
              <div>
                <img src="/static/images/case5.jpg" alt="">
              </div>
              <dl>
                <dt>融恒嘉汇空气治理</dt>
                <dd>服务时间：2016.05.08</dd>
                <dd>建筑面积：5000平方米</dd>
                <dd>服务内容：<p>超标甲醛及粉尘治理，治理后，原超标污染物均符合国家标准</p></dd>
              </dl>
              <span></span>
            </li>
          </ul>
          <a href="#">查看更多</a>
        </div>
      </div>
      <div class="honor">
        <p>荣誉资质<span>Honor and qualification of Huaxiajunan</span></p>
        <ul class="clearfix">
          <li>
            <div>
              <img src="/static/images/honor1.jpg" alt="">
            </div>
            <p>室内环境监测治理达标单位</p>
          </li>
          <li>
            <div>
              <img src="/static/images/honor2.jpg" alt="">
            </div>
            <p>室内环境监测治理达标单位</p>
          </li>
          <li>
            <div>
              <img src="/static/images/honor3.jpg" alt="">
            </div>
            <p>室内环境监测治理达标单位</p>
          </li>
          <li>
            <div>
              <img src="/static/images/honor4.jpg" alt="">
            </div>
            <p>室内环境监测治理达标单位</p>
          </li>
          <li>
            <div>
              <img src="/static/images/honor5.jpg" alt="">
            </div>
            <p>室内环境监测治理达标单位</p>
          </li>
        </ul>
        <ul class="clearfix">
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
      <div class="news">
        <p>新闻资讯</p>
        <div class="clearfix">
            <div id="slidy-container"> 
              <figure id="slidy"> 
                <a href='#' target='_blank'><img src="/static/images/newsCarousel1.jpg" alt="jQuery仿淘宝商品多属性查询" data-caption="jQuery仿淘宝商品多属性查询"></a> 
                <a href='#' target='_blank'><img src="/static/images/newsCarousel1.jpg" alt="jQuery结合elevateZoom演示多种放大镜效果" data-caption="jQuery结合elevateZoom演示多种放大镜效果"></a> 
                <a href='#' target='_blank'><img src="/static/images/newsCarousel1.jpg" alt="百度编辑器ueditor" data-caption="百度编辑器ueditor"></a> 
              </figure> 
            </div> 
          <!-- </div> -->
          <ul class="list-news">
            <li><a href="#">&gt; 随总理访韩爱品生新风系统影响力从欧洲向亚太地区延伸</a><span>2017-08-02</span></li>
            <li><a href="#">&gt; 新风机要注意哪些内容?</a><span>2017-08-02</span></li>
            <li><a href="#">&gt; 新风机要注意哪些内容?</a><span>2017-08-02</span></li>
            <li><a href="#">&gt; 新风机要注意哪些内容?</a><span>2017-08-02</span></li>
            <li><a href="#">&gt; 新风机要注意哪些内容?</a><span>2017-08-02</span></li>
            <li><a href="#">&gt; 新风机要注意哪些内容?</a><span>2017-08-02</span></li>
          </ul>
        </div>
      </div>
    </main>
  </section>

  </div>

  <div id="content-bot">
    <div class="friendly-link">
      <p>友情链接</p>
      <ul class="clearfix">
        @foreach($links as $link)
          <li><a href="{{ $link->link_href }}" rel="nofollow">{{ $link->link_name }}</a></li>
        @endforeach
      </ul> 
    </div>
  </div>
@endsection

@section('scripts')
  @parent
  <script src="{{ asset('js/index.js') }}"></script>
  <script>
    cssSlidy();
  </script>
@endsection