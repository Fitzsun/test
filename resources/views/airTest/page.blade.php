@extends('layouts.app')

@section('title')
  室内空气检测
@endsection

@section('styles')
  {{--  为什么写在父模板上不起作用?  --}}
  <link rel="stylesheet" href="{{ asset('css/sprite.css') }}">
  <link rel="stylesheet" href="{{ asset('css/airTest.css') }}">
@endsection

@section('content')
<div id="wrapper">
  <style type="text/css">
    #banner{
      background:url(/static/images/testBanner.jpg) no-repeat scroll center;
    }
  </style>
  <div id="banner"></div>
  <section id="section">
    <main>
      <div class="service-scope">
        <p>服务范围<span>Air detection service scope</span></p>
        <ul class="list-items clearfix">
          <li>
            <div class="icon-house"></div>
            <p>普通民居</p>
          </li>
          <li>
            <div class="icon-office"></div>
            <p>办公室</p>
          </li>
          <li>
            <div class="icon-office building"></div>
            <p>写字楼</p>
          </li>
          <li>
            <div class="icon-guesthouse"></div>
            <p>宾馆</p>
          </li>
          <li>
            <div class="icon-hotel"></div>
            <p>酒店</p>
          </li>
          <li>
            <div class="icon-kindergarten"></div>
            <p>幼儿园</p>
          </li>
          <li>
            <div class="icon-school"></div>
            <p>学校</p>
          </li>
          <li>
            <div class="icon-hospital"></div>
            <p>医院</p>
          </li>
          <li>
            <div class="icon-club"></div>
            <p>会所</p>
          </li>
          <li>
            <div class="icon-KTV"></div>
            <p>KTV</p>
          </li>
        </ul>
      </div> 
      <div class="airTest">
        <p>空气检测简介<span>Air test profile of Huaxiajunan</span></p>
        <div class="desc">
          <img src="/static/images/desc.png" alt="自由呼吸">
        </div>
        <aside>
          <p>車要年城錯不國：下一人在代同性，性利容我友標洋況面而門因用我來課有出知我樣賽政黨以舉請國西地流幾再理不！裡算爸醫獲？反科也快當卻善早不記樂過外且在了不外龍意高家爸分上笑到銀子。是外心童強！量天推候且動部有賽行，選洋期；制來分成的立大站？</p>
          <p>車要年城錯不國：下一人在代同性，性利容我友標洋況面而門因用我來課有出知我樣賽政黨以舉請國西地流幾再理不！裡算爸醫獲？反科也快當卻善早不記樂過外且在了不外龍意高家爸分上笑到銀子。是外心童強！量天推候且動部有賽行，選洋期；制來分成的立大站？車要年城錯不國：下一人在代同性，性利容我友標洋況面而門因用我來課有出知我樣賽政黨以舉請國西地流幾再理不！裡算爸醫獲？反科也快當卻善早不記樂過外且在了不外龍意高家爸分上笑到銀子。是外心童強！量天推候且動部有賽行，選洋期；制來分成的立大站？</p>
          <p>車要年城錯不國：下一人在代同性，性利容我友標洋況面而門因用我來課有出知我樣賽政黨以舉請國西地流幾再理不！裡算爸醫獲？反科也快當卻善早不記樂過外且在了不外龍意高家爸分上笑到銀子。是外心童強！量天推候且動部有賽行，選洋期；制來分成的立大站？</p>
        </aside>
      </div>
      <div class="standard">
        <p>标准及资质<span>Testing standards and qualifications</span></p>
        <ul class="list-items">
          <li>
            <div>
              <img src="/static/images/standard1.jpg" alt="室内空气质量标准">
              <dl>
                <dt>&lt;&lt;室内空气质量标准&gt;&gt;</dt>
                <dd>電林任關也師教費上質座局言天會電性界送工舞媽多？一者深的只，電何舉盡！這就的積手：安條據。立引義，特活的醫意變國選進來有整區生要保行高主路走興活以年母實；生較國提；事當對清初筆來代東科刻言早命一正上自，而離也決關話眼！產生沒有意義的文字組合（文章？），供排版時填充版面用，但不會因為字義而左右版型的判斷。文字、標點符號出現機率大致符合台灣文章習慣。聽說很多學排版</dd>
                <dd></dd>
              </dl>
            </div>
            <p>室内空气质量标准</p>
          </li>
          <li>
            <div>
              <img src="/static/images/standard2.jpg" alt="室内空气质量标准">
              <dl>
                <dt>&lt;&lt;室内空气质量标准&gt;&gt;</dt>
                <dd>電林任關也師教費上質座局言天會電性界送工舞媽多？一者深的只，電何舉盡！這就的積手：安條據。立引義，特活的醫意變國選進來有整區生要保行高主路走興活以年母實；生較國提；事當對清初筆來代東科刻言早命一正上自，而離也決關話眼！產生沒有意義的文字組合（文章？），供排版時填充版面用，但不會因為字義而左右版型的判斷。文字、標點符號出現機率大致符合台灣文章習慣。聽說很多學排版</dd>
                <dd></dd>
              </dl>
            </div>
            <p>室内空气质量标准</p>
          </li>
          <li>
            <div>
              <img src="/static/images/standard3.jpg" alt="室内空气质量标准">
              <dl>
                <dt>&lt;&lt;室内空气质量标准&gt;&gt;</dt>
                <dd>電林任關也師教費上質座局言天會電性界送工舞媽多？一者深的只，電何舉盡！這就的積手：安條據。立引義，特活的醫意變國選進來有整區生要保行高主路走興活以年母實；生較國提；事當對清初筆來代東科刻言早命一正上自，而離也決關話眼！產生沒有意義的文字組合（文章？），供排版時填充版面用，但不會因為字義而左右版型的判斷。文字、標點符號出現機率大致符合台灣文章習慣。聽說很多學排版</dd>
                <dd></dd>
              </dl>
            </div>
            <p>室内空气质量标准</p>
          </li>
          <li>
            <div>
              <img src="/static/images/standard4.jpg" alt="室内空气质量标准">
              <dl>
                <dt>&lt;&lt;室内空气质量标准&gt;&gt;</dt>
                <dd>電林任關也師教費上質座局言天會電性界送工舞媽多？一者深的只，電何舉盡！這就的積手：安條據。立引義，特活的醫意變國選進來有整區生要保行高主路走興活以年母實；生較國提；事當對清初筆來代東科刻言早命一正上自，而離也決關話眼！產生沒有意義的文字組合（文章？），供排版時填充版面用，但不會因為字義而左右版型的判斷。文字、標點符號出現機率大致符合台灣文章習慣。聽說很多學排版</dd>
                <dd></dd>
              </dl>
            </div>
            <p>室内空气质量标准</p>
          </li>
        </ul>
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
