<!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from preview.imithemes.com/born-to-give/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:09:16 GMT -->
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
                    <a href="/" class="default-logo"><img src="{{url('images/arrahmah.ico')}}" alt="Logo"></a>
                    <a href="/" class="default-retina-logo"><img src="{{url('images/logo%402x.png')}}" alt="Logo" width="199" height="30"></a>
                    <a href="/" class="sticky-logo"><img src="{{url('images/arrahmah.ico')}}" alt="Logo"></a>
                    <a href="/" class="sticky-retina-logo"><img src="{{url('images/sticky-logo%402x.png')}}" alt="Logo" width="199" height="30"></a>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="header-info-col"><i class="fa fa-phone"></i> (021) 870-2428</div>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li><a href="/kegiatan">Kegiatan</a></li>
                    <li><a href="/gallery">Galeri</a></li>
                </ul>
            </div>
        </header>
    </div>
    </div>
    <!-- Hero Area -->
    <div class="hero-area">
        <div class="page-banner parallax" style="background-image:url('/images/Pattern.jpg');">
            <div class="container">
                <div class="page-banner-text">
                    <h1 class="block-title">Kegiatan</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
            	<div class="row">
                    
                	<div class="col-md-8 content-block">
                    	<h3>{{$s->judul}}</h3>
                        <span class="meta-data grid-item-meta"><i class="fa fa-calendar"></i> Dibuat pada {{date_format(date_create($s->tanggal_kegiatan),"d M Y")}}</span>

                    	<div class="post-media">
                        	<img src="{{url('file/foto/'.$s->foto)}}" alt="">
                        </div>
                        <div class="post-content">
                        	<p>{!!$s->content!!}</p>
                      	</div>
                        
                        <!-- Pagination -->
                        <ul class="pager">
                            <li class="pull-left"><a href="/artikel" onclick="javascript:history.back()">&larr; Kembali</a></li>
                        </ul>
                    </div>
                    
                    
                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar-block">
                        <div class="widget tabbed_content tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"> <a data-toggle="tab" href="#Trecent">Terbaru</a> </li>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="Trecent" class="tab-pane active">
                                    <div class="widget recent_posts">
                                        <ul>
                                            @foreach($artikel_all as $key)
                                            <li>
                                                <a href="{{route('read_art',$key->id)}}" class="media-box">
                                                    <img src="{{url('file/foto/'.$key->foto)}}"" alt="">
                                                </a>
                                                <h5><a href="{{route('read_art',$key->id)}}">{{$key->judul}}</a></h5>
                                                <span class="meta-data grid-item-meta">Dibuat Pada {{$key->tanggal}}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Site Footer -->
    <div class="site-footer parallax parallax3" style="background-image:url('/images/parallax3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="widget footer_widget">
                        <h4 class="widgettitle">Yayasan Ar Rahmah</h4>
                        <p><img src="{{url('/images/arrahmah.ico')}}" alt="" style="height: 100px;"></p>
                        <p><p>Yayasan Ar Rahmah Cijantung adalah sebuah yayasan yang bergerak di bidang pendidikan dan syiar Islam di lingkungan masyarakat. Visi kami adalah menjadikan pendidikan Islam sebagai tonggak kemajuan bangsa dan negara.</p></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyrights-col-left">
                        <p>&copy; 2016 Born to Give. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6"></div>
                    <div class="copyrights-col-right">
                        <ul class="footer-menu">
                            <li><a href="privacy-policy.html">Privacy policy</a></li>
                            <li><a href="payment-terms.html">Payment terms</a></li>
                            <li><a href="refund-policy.html">Refund policy</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>

<!-- Donate Form Modal -->
<div class="modal fade" id="DonateModal" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-md-6 col-sm-6 donate-amount-option">
                        <h4>Choose an amount</h4>
                        <ul class="predefined-amount">
                            <li><label><input type="radio" name="donation-amount">$10</label></li>
                            <li><label><input type="radio" name="donation-amount">$20</label></li>
                            <li><label><input type="radio" name="donation-amount">$30</label></li>
                            <li><label><input type="radio" name="donation-amount">$50</label></li>
                            <li><label><input type="radio" name="donation-amount">$100</label></li>
                        </ul>
                    </div>
                    <span class="donation-choice-breaker">Or</span>
                    <div class="col-md-6 col-sm-6 donate-amount-option">
                        <h4>Enter your own</h4>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">$</span>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 donation-form-infocol">
                        <h4>Address</h4>
                        <input type="text" class="form-control" placeholder="Address line 1">
                        <input type="text" class="form-control" placeholder="Address line 2">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" placeholder="State/City">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <input type="text" class="form-control" placeholder="Zipcode">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 donation-form-infocol">
                        <h4>Personal info</h4>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Email address">
                        <input type="text" class="form-control" placeholder="Phone no.">
                        <label class="checkbox"><input type="checkbox"> Register me on this website</label>
                    </div>
                 </div>
            </div>
            <div class="modal-footer text-align-center">
                <button type="button" class="btn btn-success">Make your donation now</button>
                <div class="spacer-20"></div>
                <p>Yayasan Ar Rahmah Cijantung adalah sebuah yayasan yang bergerak di bidang pendidikan dan syiar Islam di lingkungan masyarakat. Visi kami adalah menjadikan pendidikan Islam sebagai tonggak kemajuan bangsa dan negara</p>
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

</body>

<!-- Mirrored from preview.imithemes.com/born-to-give/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:08:48 GMT -->
</html>