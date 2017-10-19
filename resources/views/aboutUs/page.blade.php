@extends('layouts.app')

@section('title')
  关于我们
@endsection

@section('styles')
  {{--  为什么写在父模板上不起作用?  --}}
  {{--  是因为使用了@section('script') @show  --}}
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/auBanner.jpg) no-repeat scroll center;
    }
  </style>
  <div id="banner"></div>
  <section>
    <main>
      <div class="list-tabs clearfix">
        <input type="radio" name="tab" id="tab1" checked>
        <label for="tab1"><a id="company">公司简介</a></label>

        <input type="radio" name="tab" id="tab2">
        <label for="tab2">企业文化</label>

        <input type="radio" name="tab" id="tab3">
        <label for="tab3">荣誉资质</label>

        <input type="radio" name="tab" id="tab4">
        <label for="tab4">联系我们</label>

        <div class="tabs-content">
          <ul class="list-icons">
            <li class="hiding  animated service" data-animation="fadeInRight" data-delay="300">
              <i class="icon icon-auSpirit"></i>
              <dl>
                <dt>企业精神</dt>
                <dd>小小一抹绿之源、只为绿色满人间</dd>
              </dl>
            </li>
            <li class="hiding  animated service" data-animation="fadeInRight" data-delay="600">
              <i class="icon icon-auIdea"></i>
              <dl>
                <dt>企业理念</dt>
                <dd>诚实做人、踏实做事、客户满意是我们的生存之本</dd>
              </dl>
            </li>
            <li class="hiding  animated service" data-animation="fadeInRight" data-delay="900">
              <i class="icon icon-auGoal"></i>
              <dl>
                <dt>企业目标</dt>
                <dd>中国室内空气治理行业领导者</dd>
              </dl>
            </li>
            <li class="hiding  animated service" data-animation="fadeInRight" data-delay="1200">
              <i class="icon icon-auMission"></i>
              <dl>
                <dt>企业使命</dt>
                <dd>持续改善室内空气环境、创百年知名企业</dd>
              </dl>
            </li>
          </ul>
          <div class="content-bot">
            <ul class="bot-left hiding animated" data-animation="fadeInRight" data-delay="300">
              <li>
                <dl>
                  <dt>企业价值观</dt>
                  <dd>创室内空气治理行业新形象、治理健康空间新坐标</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>企业愿景</dt>
                  <dd>打造室内空气治理绿色航母、做一线最好的环保产品</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>企业宗旨</dt>
                  <dd>为顾客创绿色空间、为员工创绿色平台、为社会创绿色环境</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>企业作风</dt>
                  <dd>诚信至上、服务为本、追求卓越、创新发展</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>企业座右铭</dt>
                  <dd>优质服务常伴您身边</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>企业口号</dt>
                  <dd>绿色空间、健康生活从北京畅呼吸开始</dd>
                </dl>
              </li>
            </ul>
            <ul class="list-imgs">
              <li><img src="/static/images/auIntro1.png" alt=""></li>
              <li><img src="/static/images/auIntro2.png" alt=""></li>
              <li><img src="/static/images/auIntro3.png" alt=""></li>
              <li>
                <dl>
                  <dt>企业文化</dt>
                  <dd>CORPARATE CULTURE</dd>
                </dl>
              </li>
            </ul>
          </div>
        </div>

        <div class="tabs-content">
          <h1>第二个标签页</h1>
        </div>

        <div class="tabs-content">
          <h1>第三个标签页</h1>
        </div>

        <div class="tabs-content clearfix">
          <div class="contact">
            <p>小小一抹绿之源，只为绿色满人间</p>
            <p><b>联系电话：</b>177-8888-8888</p>
            <p><b>E-mail：</b>huaxiajunan@163.com</p>
            <p><b>通讯地址：</b>北京市海淀区上地十街1号院4号楼16层1601室</p>
            <p>欢迎留言，我们会尽快安排工作人员与您取得联系</p>
          </div>
          <form action="" method="" enctype="">
            <input type="text" name="" id="" placeholder="姓名" onfocus="this.placeholder=''" onblur="this.placeholder='姓名'">
            <input type="tel" name="" id="" placeholder="电话" onfocus="this.placeholder=''" onblur="this.placeholder='电话'">
            <div contenteditable="true" data-text="留言"></div>
            <a href="#"><img src="/static/images/auButton.png" alt="提交"></a>
          </form>
        </div>
      </div>
    </main>
  </section>
</div>

@include('links.page')
@endsection
