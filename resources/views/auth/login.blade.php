<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>SALADIN | Login</title>

  <link rel="shorcut icon" href="{{url('images/saladin.png')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{url('/css1/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('/css1/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{url('/css1/site.min.css')}}">

  <link rel="stylesheet" href="{{url('/vendor1/animsition/animsition.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/flag-icon-css/flag-icon.css')}}">


  <!-- Page -->
  <link rel="stylesheet" href="{{url('/css1/pages/login.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{url('/fonts1/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{url('/fonts1/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http:/fonts1.googleapis.com/css1?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="/vendor1/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="/vendor1/media-match/media.match.min.js"></script>
    <script src="/vendor1/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{url('/vendor1/modernizr/modernizr.js')}}"></script>
  <script src="{{url('/vendor1/breakpoints/breakpoints.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http:/browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
      <a href="/">
        <img class="brand-img" src="{{url('images/saladin.png')}}" alt="..." style="height: 100px;">
        <h2 class="brand-text">SALADIN</h2>
      </div>
        </a>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/trylogin') }}">
                        {{ csrf_field() }}
          
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="form-group">
            <i class="material-icons prefix"></i>
            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required autofocus >
            <label for="email" data-error="Email tidak benar!Bukan tipe email" data-success="Email benar!"></label>
          </div>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" class="form-control" id="password" name="password"
          placeholder="Password">
        </div>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>

        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline pull-left">
            <input type="checkbox" id="inputCheckbox" name="checkbox">
            
        <button type="submit" class="btn btn-primary btn-block" style="width: 330px;">Masuk</button>

      
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="{{url('/vendor1/jquery/jquery.js')}}"></script>
  <script src="{{url('/vendor1/bootstrap/bootstrap.js')}}"></script>
  <script src="{{url('/vendor1/animsition/jquery.animsition.js')}}"></script>
  <script src="{{url('/vendor1/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{url('/vendor1/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{url('/vendor1/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{url('/vendor1/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

  <!-- Plugins -->
  <script src="{{url('/vendor1/switchery/switchery.min.js')}}"></script>
  <script src="{{url('/vendor1/intro-js/intro.js')}}"></script>
  <script src="{{url('/vendor1/screenfull/screenfull.js')}}"></script>
  <script src="{{url('/vendor1/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{url('/vendor1/jquery-placeholder/jquery.placeholder.js')}}"></script>

  <!-- Scripts -->
  <script src="{{url('/js1/core.js')}}"></script>
  <script src="{{url('/js1/site.js')}}"></script>

  <script src="{{url('/js1/sections/menu.js')}}"></script>
  <script src="{{url('/js1/sections/menubar.js')}}"></script>
  <script src="{{url('/js1/sections/sidebar.js')}}"></script>

  <script src="{{url('/js1/configs/config-colors.js')}}"></script>
  <script src="{{url('/js1/configs/config-tour.js')}}"></script>

  <script src="{{url('/js1/components/asscrollable.js')}}"></script>
  <script src="{{url('/js1/components/animsition.js')}}"></script>
  <script src="{{url('/js1/components/slidepanel.js')}}"></script>
  <script src="{{url('/js1/components/switchery.js')}}"></script>
  <script src="{{url('/js1/components/jquery-placeholder.js')}}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>