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
        <p class="hiding animated" data-animation="fadeInUp" data-delay="500">标准及资质<span>Testing standards and qualifications</span></p>
        <ul class="list-items">
        @foreach($standards as $key=>$standard)
          @if($key==0 || $key==3)
          <li class="hiding animated" data-animation="fadeInDown" data-delay="300">
            <div>
              <img src="{{ $standard->standard_image_url }}" alt="室内空气质量标准">
              <dl>
                <dt>&lt;&lt;{{ $standard->title }}&gt;&gt;</dt>
                <dd>{{ $standard->content }}</dd>
                <dd></dd>
              </dl>
            </div>
            <p>{{ $standard->name }}</p>
          </li>
          @else
          <li class="hiding animated" data-animation="fadeInUp" data-delay="600">
            <div>
              <img src="{{ $standard->standard_image_url }}" alt="室内空气质量标准">
              <dl>
                <dt>&lt;&lt;{{ $standard->title }}&gt;&gt;</dt>
                <dd>{{ $standard->content }}</dd>
                <dd></dd>
              </dl>
            </div>
            <p>{{ $standard->name }}</p>
          </li>
          @endif
        @endforeach
        </ul>
      </div>
    </main>
  </section>
</div>

@include('links.page')
@endsection
