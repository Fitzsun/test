<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
  <meta  charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" /> 
  <meta name="keywords" content="{{ config('hxja.meta.keywords') }}">
  <meta name="description" content="{{ config('hxja.meta.description') }}">

  <meta name="renderer" content="webkit" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ config('hxja.default_icon') }}">
  
  <!-- 跳转到不同的网页,title的名字不一样 -->
  <title>@yield('title',config('app.name'))</title>
  
  

  <!-- Scripts -->
  <!-- 下面两句的作用? -->
  <script>
      window.Language = '{{ config('app.locale') }}';

      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>

  @yield('styles')

  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
  <body>

    @include('particals.header')

    <div id="wrapper">
      <style type="text/css">
        #smbanner{
          width:100%;
          height:238px;
          margin:50px 0;
          background:url(/static/images/smbanner.png) no-repeat scroll center;
        }
      </style>

      @yield('content')
      
    </div>

    @include('particals.footer')
    
  @section('scripts')

    <script src="{{ asset('js/app.js') }}"></script>

    {{--  <script src="{{ asset('static/cssslidy.js') }}"></script>  --}}

    <script src="{{ asset('js/common.page.js') }}"></script>

  @show
  
  @yield('scripts')
  </body>
</html>