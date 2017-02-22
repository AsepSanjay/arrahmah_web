<!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from preview.imithemes.com/born-to-give/gallery-2cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:09:00 GMT -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ar Rahmah</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link rel="shorcut icon" href="{{url('images/arrahmah.ico')}}"> 
<!-- CSS
  ================================================== -->
<link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('vendor/magnific/magnific-popup.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('vendor/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('vendor/owl-carousel/css/owl.theme.css')}}" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link class="alt" href="{{url('colors/color1.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('style-switcher/css/style-switcher.css')}}" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="{{url('js/modernizr.js')}}"></script><!-- Modernizr -->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="{{url('/')}}" class="default-logo"><img src="{{url('images/arrahmah.ico')}}" alt="Logo"></a>
                    <a href="{{url('/')}}" class="default-retina-logo"><img src="{{url('images/logo%402x.png')}}" alt="Logo" width="199" height="30"></a>
                    <a href="{{url('/')}}" class="sticky-logo"><img src="{{url('images/arrahmah.ico')}}" alt="Logo"></a>
                    <a href="{{url('/')}}" class="sticky-retina-logo"><img src="{{url('images/sticky-logo%402x.png')}}" alt="Logo" width="199" height="30"></a>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="header-info-col"><i class="fa fa-phone"></i> (021) 870-2428</div>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li><a href="{{url('/')}}">Beranda</a></li>
                    <li><a href="{{url('/artikel')}}">Artikel</a></li>
                    <li><a href="{{url('/kegiatan')}}">Kegiatan</a></li>
                    <li><a href="{{url('/gallery')}}">Galeri</a></li>
                </ul>
            </div>
        </header>
    </div>
</div>
   <!-- Hero Area -->
    <div class="hero-area">
        <div class="page-banner parallax" style="background-image:url(images/Pattern.jpg);">
            <div class="container">
                <div class="page-banner-text">
                    <h1 class="block-title">Galeri</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                
                <div class="row">
                    <ul class="sort-destination isotope gallery-items gallery-items-nocaption" data-sort-id="gallery">
                        @foreach($gallery as $key)
                        <li class="col-md-6 col-sm-6 col-xs-6 grid-item gallery-grid-item images format-image">
                           	<a href="{{url('file/foto/'.$key->foto)}}" class="media-box magnific-image"> <img src="{{url('file/foto/'.$key->foto)}}" alt="" style="height: 400px;"> </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Page Pagination -->
                <nav>
                            <ul class="pagination pagination-lg">
                                
                                <li class="active">{!!$gallery->render()!!}</li>
                                
                            </ul>
                        </nav>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer parallax parallax3" style="background-image:url(images/parallax3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="widget footer_widget">
                        <h4 class="widgettitle">Yayasan Ar Rahmah</h4>
                        <p><img src="images/arrahmah.ico" alt="" style="height: 100px;"></p>
                        <p><p>Yayasan Ar Rahmah Cijantung adalah sebuah yayasan yang bergerak di bidang pendidikan dan syiar Islam di lingkungan masyarakat. Visi kami adalah menjadikan pendidikan Islam sebagai tonggak kemajuan bangsa dan negara.</p></p>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  	
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a></div>
<script src="{{url('js/jquery-2.1.3.min.js')}}"></script> <!-- Jquery Library Call -->
<script src="{{url('vendor/magnific/jquery.magnific-popup.min.js')}}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{url('js/ui-plugins.js')}}"></script> <!-- UI Plugins -->
<script src="{{url('js/helper-plugins.js')}}"></script> <!-- Helper Plugins -->
<script src="{{url('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script> <!-- Owl Carousel -->
<script src="{{url('js/bootstrap.js')}}"></script> <!-- UI -->
<script src="{{url('js/init.js')}}"></script> <!-- All Scripts -->
<script src="{{url('vendor/flexslider/js/jquery.flexslider.js')}}"></script> <!-- FlexSlider -->
<script src="{{url('js/circle-progress.js')}}"></script> <!-- Circle Progress Bars -->
<script src="{{url('style-switcher/js/jquery_cookie.js')}}"></script>
<script src="{{url('style-switcher/js/script.js')}}"></script>
<!-- Style Switcher Start -->

</body>

<!-- Mirrored from preview.imithemes.com/born-to-give/gallery-2cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:09:00 GMT -->
</html>