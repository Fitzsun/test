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

  <link rel="stylesheet" href="{{ asset('css/sprite.css') }}">

  <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
    

    <script src="{{ asset('js/app.js') }}"></script>

    {{--  <script src="{{ asset('static/cssslidy.js') }}"></script>  --}}

    <script src="{{ asset('js/common.page.js') }}"></script>

    <script src="{{ asset('static/js/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('js/jquery.appear.js') }}"></script>

    <script>
      function initAnimations() {
        var $animated = $(".animated");

        $animated.appear({
            force_process: true
        });

        $animated.on("appear", function() {

            var $el = $(this);

            var animation = $el.data("animation");
            var delay = $el.data("delay");

            // Mofile fix
            if ($(window).width() < 768) {
                delay = 0;
            }

            if (delay) {

                setTimeout(function() {
                    $el.addClass(animation);
                    $el.addClass("showing");
                    $el.removeClass("hiding");
                }, delay);
            } else {

                $el.addClass(animation);
                $el.addClass("showing");
                $el.removeClass("hiding");
            }
        });

        // Service hover animation
        $(".service").hover(function() {
            $("img", this).addClass("animated tada");
            $("i", this).addClass("animated tada");
        }, function() {
            $("img", this).removeClass("animated tada");
            $("i", this).removeClass("animated tada");
        });
      }
    $(document).ready(function() {
      initAnimations();
    });
    </script>
  @yield('scripts')
  </body>
</html>