@extends('layouts.design')
@section('content')
<!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Data Materi</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Materi</li>
        <li class="active">Data Materi</li>
      </ol>
    </div><br>
    
    <div class="page-content container-fluid">
      <div class="row" data-plugin="masonry">
@foreach($materi as $key)
        <div class="col-md-6 col-xs-6 masonry-item">

          <!-- Widget -->
          
          <div class="widget widget-article widget-shadow">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="{{$key->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="widget-body">
              <p class="widget-metas type-link">
                Ditambahkan oleh
                <a href="javascript:void(0)">{{$key->nama_admin}}</a>
                <a href="javascript:void(0)">{{$key->tanggal}}</a>
                <a href="javascript:void(0)">
              </p>
              <h3 class="widget-title">{{$key->tema}}</h3>

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
                    <i class="icon wb-trash"></i> Hapus
                  </a>
                  <a href="{{route('update',$key->id)}}">
                    <i class="icon wb-edit"></i> Sunting
                  </a>
                  
                </div>
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