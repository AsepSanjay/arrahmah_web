@extends('layouts.design')
@section('content')
<!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Data Artikel</h1>
      <ol class="breadcrumb">
        <li><a href="/admin">Beranda</a></li>
        <li class="active">Artikel</li>
        <li class="active">Data Artikel</li>
      </ol>
    </div><br>
    
    <div class="page-content container-fluid">
      <div class="row" data-plugin="masonry">
@foreach($artikel as $key)
        <div class="col-md-6 col-xs-6 masonry-item">

          <!-- Widget -->
          
          <div class="widget widget-article widget-shadow">
            <div class="widget-header cover overlay-hover overlay">
              <img class="cover-image overlay-scale" style="width: 100%;height: 300px;" src="{{url('file/foto/'.$key->foto)}}"
              alt="...">
            </div>
            <div class="widget-body">
              <p class="widget-metas type-link">
                By
                <a href="javascript:void(0)">Heather Harper</a>
                <a href="javascript:void(0)">{{$key->tanggal}}</a>
                <a href="javascript:void(0)">
                  <span>3</span> Comments</a>
              </p>
              <h3 class="widget-title">{{$key->judul}}</h3>

              <?php
                $string = strip_tags($key->content);

                  if (strlen($string) > 25) {

                  $stringCut = substr($string, 0, 200);
                  $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                                    }
                  echo $string;
              ?>
              <div class="widget-body-footer">
                <div class="widget-actions pull-left">
                  <a href="{{ $key->id }}/destroy">
                    <i class="icon wb-trash"></i>
                  </a>
                  <a href="{{route('update',$key->id)}}">
                    <i class="icon wb-edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="icon wb-chat"></i>
                    <span>115</span>
                  </a>
                </div>
                <a class="btn btn-default btn-outline pull-right" href="{{route('read',$key->id)}}">
                  <i class="icon wb-chevron-right-mini"></i> Read More
                </a>
              </div>
            </div>
          </div>
          <!-- End Widget -->

        </div>
@endforeach
      </div>
    </div>
  </div>
  <!-- End Page -->

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
@endsection