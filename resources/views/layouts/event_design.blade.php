<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Ar Rahmah</title>

  <link rel="shorcut icon" href="{{url('images/arrahmah.ico')}}">

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

  <!-- Plugin -->
  <link rel="stylesheet" href="{{url('/vendor1/datatables-bootstrap/dataTables.bootstrap.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/datatables-fixedheader/dataTables.fixedHeader.css')}}">
  <link rel="stylesheet" href="{{url('/vendor1/datatables-responsive/dataTables.responsive.css')}}">


  <!-- Fonts -->
  <link rel="stylesheet" href="{{url('/fonts1/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{url('/fonts1/brand-icons/brand-icons.min.css')}}">
  <link rel="stylesheet" href="{{url('http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic')}}">

  <!-- Inline -->
  <style>
    @media (max-width: 480px) {
      .panel-actions .dataTables_length {
        display: none;
      }
    }
    
    @media (max-width: 320px) {
      .panel-actions .dataTables_filter {
        display: none;
      }
    }
    
    @media (max-width: 767px) {
      .dataTables_length {
        float: left;
      }
    }
    
    #exampleTableAddToolbar {
      padding-left: 30px;
    }
  </style>

  <!-- Scripts -->
  <script src="{{url('/vendor1/modernizr/modernizr.js')}}"></script>
  <script src="{{url('/vendor1/breakpoints/breakpoints.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{url('/images/arrahmah.png')}}" title="AR">
        <span class="navbar-brand-text"> Ar Rahmah</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="{{url('file/foto/'.Auth::user()->foto_profile)}}" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              
              <li role="presentation">
                <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" id="jas" class="waves-effect waves-light"><i class="icon wb-power" aria-hidden="true"></i>Logout</a>
                </li>
    
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

              </li>
            </ul>
          </li>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->

        
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item">
              <a href="{{url('/admin')}}" data-slug="dashboard">
                <i class="site-menu-icon wb-home" aria-hidden="true"></i>
                <span class="site-menu-title">Beranda</span>
                <div class="site-menu-badge">
                </div>
              </a>
              
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Artikel</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url('admin/artikel/data_artikel')}}" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Artikel</span>
                  </a>
                </li>
                  <li class="site-menu-item">
                  <a class="animsition-link" href="{{url('admin/artikel/input_artikel')}}" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Input Artikel</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Kegitan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url('admin/event/data_event')}}" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Kegiatan</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url('admin/event/input_event')}}" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Kegiatan</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-gallery" aria-hidden="true"></i>
                <span class="site-menu-title">Galeri</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{route('data_gallery')}}" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lihat Galeri</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{route('input_gallery')}}" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Gambar</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="site-menu-category">Akses</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Admin</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{url('admin/data_admin')}}" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Admin</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{route('input_admin')}}" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Admin</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>


  @yield('content')

 <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Remark</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart">amazingSurge</a>
    </div>
  </footer>
</html>
  