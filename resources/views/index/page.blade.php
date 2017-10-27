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
      #sidebar{
        position:fixed;
        width:1200px;
        top:50%;
        left:50%;
        transform:translateX(-50%);
      }
      #sidebar ul{
        margin-left:1200px;
        width:100px;
        height:300px;
        border:1px solid #48abff;
      }
      #sidebar ul>li:not(:last-of-type){
        position:relative;
        cursor:pointer;
        background:#48abff;
        width:100%;
        height:100px;
        line-height:100px;
      }
      #sidebar ul>li:hover>div{
        display:block;
      }
      #sidebar div{
        display:none;
        position:absolute;
        right:120px;
      }
      #sidebar div>img:nth-of-type(2){
        position:absolute;
        top:7px;
        left:7px;
      }
      #sidebar li:first-of-type div{
        top:0;
      }
      #sidebar li:nth-of-type(2) div{
        top:-22px;
      }
      #sidebar li>img{
        vertical-align:middle;
      }
      #sidebar li:first-of-type{
        border-bottom:1px solid #fff;
      }
      #sidebar a{
        display:block;
        padding-top:15px;
        width:100%;
        height:100%;
      }
      #sidebar p{
        position:absolute;
        width:100%;
        height:100px;
        padding:15px 0;
        line-height:35px;
        margin:0;
        text-align:center;
      }
      #sidebar p>span:first-child{
        font-size:16px;
        color:#666;
      }
      #sidebar p>span:last-child{
        font-size:24px;
        color:#48abff;
      }
      #sidebar span{
        color:#48abff;
        font-size:25px;
      }
    </style>
  <div id="slidebox" class="clearfix">
    <div id="panel">
      <ul></ul>
    </div>
    {{--  <div class="bd">
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
    </ol>  --}}
    <!-- 设置轮播控制器 -->
    <a class="carousel-control prev" href="#"><span class="icon icon-prevSlide"></span></a>
    <a class="carousel-control next" href="#"><span class="icon icon-nextSlide"></span></a>
  </div>
  <section id="desc">
    <main>
      <div class="desc-list overflow clearfix">
        <dl class="hiding animated service" data-animation="zoomIn" data-delay="200">
          <dt>甲醛治理</dt>
          <dd>室内车内甲醛治理，还你清新呼吸</dd>
          <dd><img src="/static/images/Formaldehyde.png" alt=""></dd>
          <dd><a href="/treatment">查看详情</a></dd>
        </dl>
        <dl class="hiding animated service" data-animation="zoomIn" data-delay="400">
          <dt>新风系统</dt>
          <dd>让呼吸更自由，远离雾霾等伤害</dd>
          <dd><img src="/static/images/newSystem.png" alt=""></dd>
          <dd><a href="/newSys">查看详情</a></dd>
        </dl>
        <dl class="hiding animated service" data-animation="zoomIn" data-delay="600">
          <dt>室内空气检测</dt>
          <dd>对身边的空气环境全方位了解</dd>
          <dd><img src="/static/images/airTest.png" alt=""></dd>
          <dd><a href="/airTest">查看详情</a></dd>
        </dl>
      </div>
      <div class="product-center">
        <p>产品中心<span>Product center of Huaxiajunan</span></p>
        <ul class="clearfix">
          <li class="hiding animated" data-animation="fadeInUp" data-delay="100">
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
            <li class="hiding animated" data-animation="flipInY" data-delay="{{ ($key+1)*300 }}">
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
  {{--  侧边栏  --}}
  <div id="sidebar">
    <ul>
      <li>
        <img src="{{ asset('static/images/sidebar-phone.png') }}" alt="">
        <div>
          <p>
            <span>全国服务热线</span><br />
            <span>130-1111-6779</span>
          </p>
          <img src="{{ asset('static/images/sidebar-telback.png') }}" alt="">
        </div>
      </li>
      <li>
        <img src="{{ asset('static/images/sidebar-smcode.png') }}" alt="">
        <div>
          <img src="{{ asset('static/images/sidebar-codeback.png') }}" alt="">
          <img src="{{ asset('static/images/sidebar-code.jpg') }}" alt="">
        </div>
      </li>
      <li>
        <a href="#">
          <img src="{{ asset('static/images/toTop.png') }}" alt="">
          <span>TOP</span>
        </a>
      </li>
    </ul>
  </div>
  

  @include('links.page')
@endsection

@section('scripts')
  @parent
  <script>
    var picInfo = @json($slides1);

    var WangeSlide = (function() {
        //配置
        var config = {
            //轮播图尺寸
            width : 1920,
            height : 600,
            //是否自动切换
            autoSwitch : true,
            //自动切换间隔时间（毫秒）
            interval : 6000,
            //轮播图图片路径
            //轮播图图片信息：图片文件名 / 图片标题 / 图片指向链接
            picInfo : picInfo
        };
        //获取图片信息
        /**
        * @param index 图片所在的索引值
        **/
        var getImgInfo = function(index) {
            var imgSrc = config.picInfo[index]["imgUrl"],
                imgAlt = config.picInfo[index]["slide_name"],
                imgUrl = config.picInfo[index]["path"],
                imgId = 'slide_' + (index+1).toString(),
                imgHtml = '<li id="' + imgId + '">' +
                            '    <a href="' + imgUrl +'" title="' + imgAlt + '" class="pic">' +
                            '        <img src="' + imgSrc + '" alt="' + imgAlt + '" class="slide_thumb img-responsive" />' +
                            '    </a>' +
                        '</li>',
                slideTextHtml = '<a href="' + imgUrl + '"  title="' + imgAlt + '">' + imgAlt+ '</a>';
            return {
                imgAlt : imgAlt,
                imgUrl : imgUrl,
                imgHtml : imgHtml,
                slideTextHtml : slideTextHtml
            }
        };
        
        //图片完全加载后缓慢加载显示
        var fadeInImg = function(el, speed) {
            //console.log(el)
            el.find("img").on('load',function() {
                el.find("img").addClass("loaded");
                el.fadeIn(speed);
            });
        };
        
        //图片切换
        /**
        * @param index 图片所在的索引值
        * @param triggerCurEl 当前触发节点元素
        **/
        var imgSwitch = function(index, triggerCurEl) {
            var slideId = 'slide_' + (index+1).toString(),
                slideIdEl = document.getElementById(slideId);
            if (slideIdEl) {
                //如果已有对应的元素，则显示已有元素
                var panelLi = $('#panel ul li');
                panelLi.hide();
                $(slideIdEl).fadeIn('slow');
            } else {
                //如果还没有对应的元素，则注入元素
                $(getImgInfo(index).imgHtml).appendTo($('#panel ul'));
                var panelLi = $('#panel ul li');
                panelLi.hide();
                //载入显示图片
                fadeInImg($("#" +slideId), 'slow');
            }
            
            //获取图片的 alt 作为显示信息
          $('#slide_text').html(getImgInfo(index).slideTextHtml);
            
            //当前状态 cur
            $('#trigger ul li').removeClass('cur');
            triggerCurEl.addClass('cur');
        };
        
        //轮播图
        var slide = function() {
            //设置轮播图尺寸
            $('#panel').css({'width' : picInfo.length * 100 + '%'});
            $('#panel li').css({'float' : 'left', 'width' : (100 / picInfo.length) + '%', 'height' : 'auto'});
            //$('#panel').css({
            //    'width' : config.width + 'px',
            //   'height' : config.height + 'px'
            //});
            var result = getImgInfo(0).imgHtml
            //初使化轮播图，只加载第一张图片信息
            $('#panel ul').html($(result));
            //载入显示图片
            fadeInImg($('#slide_1'), 500);
            
            //注入背景层 + 触发器容器 + 轮播图文字容器
            var slideBg = '<div id="slide_bg"></div>',
                trigger = '<div id="trigger"></div>',
                slideText = '<div id="slide_text"></div>';
            $('#panel').after(slideBg + trigger);
            
            //获取图片的 alt 作为显示信息
            $('#slide_text').html(getImgInfo(0).slideTextHtml);
            
            //注入触发节点
            var triggerUl = $('<ul></ul>');
            triggerUl.appendTo($('#trigger'));
            for (var i=0, j=config.picInfo; i<j.length; i++) {
                $('<li>' + (i+1).toString() +'</li>').appendTo(triggerUl);
            }
            
            //当前状态 cur
            $('#trigger ul li').eq(0).addClass('cur');
            $('')
            //点击触发节点
            $("#trigger ul li").click(function(){
                var index = $("#trigger ul li").index($(this));
                //console.log(index)
                imgSwitch(index,$(this));
            })
            
            
            //鼠标悬停时，停止切换
            var goSwitch = true;
            $('#panel').hover(
                function() {goSwitch = false},
                function() {goSwitch = true}
            );
            
            //自动切换
            if (config.autoSwitch) {
                setInterval(function() {
                    if (goSwitch) {
                        //判断当前cur所在的索引值
                        var index = parseInt($('.cur','#trigger').text()) - 1;
                        if (index > (config.picInfo.length-2)) {
                            index = -1;
                        }
                        imgSwitch((index+1), $('#trigger ul li:eq(' + (index+1) + ')'));
                    }
                }, config.interval);
            }
        };
        
        return {
            //初使化
            init : function() {
                slide();
            }
        }
    })(picInfo);
    WangeSlide.init();

  </script>
  <script src="{{ asset('js/index.js') }}"></script>
@endsection