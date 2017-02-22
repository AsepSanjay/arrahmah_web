@extends('layouts.design')
@section('content')

<style>
    .lightbox-block {
      max-width: 600px;
      padding: 15px 20px;
      margin: 40px auto;
      overflow: auto;
      background: #fff;
      border-radius: 3px;
    }
</style>

<!-- Page -->
<div class="page animsition">
  <div class="page-header" style="margin-bottom: -520px">
        <h1 class="page-title">Data Gambar</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/admin])}}">Beranda</a></li>
          <li class="active">Galeri</li>
          <li class="active">Data Gambar</li>
        </ol>
  </div>
</div>

<body class="page-gallery">
  <div class="page animsition">
  
    <div class="page-content padding-0">
      <ul class="blocks no-space blocks-100 blocks-xlg-3 blocks-md-2">
      @foreach($gallery as $key)
        <li class="widget">
          <div class="widget-header cover overlay overlay-hover">
            <img class="cover-image overlay-scale" src="{{url('file/foto/'.$key->foto)}}" alt="..." style="max-height: 292px;">
            <div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
              <div class="vertical-align-middle">
                <div class="widget-time widget-divider">
                  <span>{{$key->tanggal}}</span>
                </div>
                <h3 class="widget-title margin-bottom-20">{{$key->keterangan}}</h3>
                <a href="{{ $key->id }}/destroy">
                <button type="button" class="btn btn-outline btn-inverse" onclick="return confirm('Apakah anda yakin ingin menghapus gambar ini?')">HAPUS </button>
                </a>
              </div>
            </div>
          </div>

        </li>
        @endforeach
      </ul>
    </div>
  </div>
</body>

<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Example Popup Zoom Gallery
      // --------------------------
      $('#exampleZoomGallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
          verticalFit: true,
          titleSrc: function(item) {
            return item.el.attr('title') +
              ' &middot; <a class="image-source-link" href="' + item.el
              .attr('data-source') +
              '" target="_blank">image source</a>';
          }
        },
        gallery: {
          enabled: true
        },
        zoom: {
          enabled: true,
          duration: 300, // don't foget to change the duration also in CSS
          opener: function(element) {
            return element.find('img');
          }
        }
      });


    })(document, window, jQuery);
  </script>
