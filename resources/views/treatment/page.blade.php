@extends('layouts.app')

@section('title')
  甲醛治理
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/treatment.css') }}">
@endsection

@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/banner.jpg) no-repeat scroll center;
    }
    #main .top{
      background:url(/static/images/carInner.png) no-repeat scroll 603px center;
    }
    #main .around{
      background: url(/static/images/danger.png) no-repeat scroll center;
    }
    #main .process .textProcess{
      background: url(/static/images/process.png) no-repeat scroll center;
    }
  </style>
<div id="banner"></div>
<div id="main">
  <main>
    <ul class="list-tabs clearfix">
      <li><a href="#tab1">室内除甲醛</a><i></i></li>
      <li><a href="#tab2">车内除甲醛</a><i></i></li>
    </ul>
    <div class="tab-container">
      <div id="tab1" class="tab-content">
        <div class="top">
          <div>
            <p>自無象花三安年了子。童進不也，層務影知數裝學火主……我爸該白。目灣於客一進料操歌；同學天及了重；的戰式須時打府；臺孩歌受禮遊科印，以蘭往；陽的多造狀王，再點我，車起有以論家……發字費來後苦正，這只他時眼，當油岸公經事己：目自成站經什，神計一作，半的對增了親我更角裡園回停學。字心再夠運山的我起但個南是半知卻發資求。</p>
            <p>服張金得反雲長人文，種文這常我首，我就股灣大過值傳總上自別月那題點此，回不動業產力說它不花因從話界局王本專媽：分出一觀星第念出停學然想事人假安險。</p>
            <p>在名爭使得仍修……子的政接。日字臺女痛受解母如臺公……中來導轉過三意小強千得每是</p>
          </div>
        </div>
        <div class="around">
          <div class="textAround">
            <p>刚买的新车有异味？</p>
            <p>甲醛就在身边，只是你不知道</p>
            <p>时间长了会头晕，头痛？</p>
            <p>偶尔还会胸闷？</p>
            <p>华夏君安让你不再受甲醛伤害</p>
            <p>皮肤过敏，痒？</p>
          </div>
        </div>
        <div class="process">
          <div>
            <p>治理流程</p>
            <div class="textProcess">
              <dl>
                <dt>施工治理后续工作</dt>
                <dd>清理施工设备，打开车窗，使车保持自然状态。</dd>
              </dl>
              <dl>
                <dt>治理方案及方法</dt>
                <dd>根据不同污染程度选择合适的治理方法。</dd>
              </dl>
              <dl>
                <dt>工程验收</dt>
                <dd>工程结束后，如客户对结果又疑问可委托北京中环环境监测中心等权威机构监测。</dd>
              </dl>
              <dl>
                <dt>施工治理前的准备工作</dt>
                <dd>新车提回，打扫干净，保证内饰表面无明显灰尘，治理前禁止吸烟。</dd>
              </dl>
              <dl>
                <dt>售后服务</dt>
                <dd>如我司所做项目出现问题，我司可免费派专人上门服务。</dd>
              </dl>
              <p>我公司对每一项治理工程做出如下保证：1、严格执行国家相关规范，使设计先进化，合理化。2、治理后的空气质量达到规定标准。3、工程质量优良。</p>
            </div>
          </div>
        </div>
      </div>
      <div id="tab2" class="tab-content">
        <h1>这是第二个Tab页</h1>
      </div>
    </div>
  </main>
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