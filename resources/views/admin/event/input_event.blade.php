@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Tambah Kegiatan</h1>
      <ol class="breadcrumb">
        <li><a href="/admin">Beranda</a></li>
        <li class="active">Kegiatan</li>
        <li class="active">Tambah Kegiatan</li>
      </ol>
  </div>
  <div class="page-content padding-30 container-fluid">
    <div class="row" data-plugin="matchHeight" data-by-row="true">
      <div class="col-xlg-6 col-md-12">
          <!-- Panel Predictions -->
        <div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
          <div class="widget-content widget-radius bg-white">
            <div class="padding-top-10 padding-30" >
                <div class="row">
                  <div class="box">
                  <div class="box-header">
            <form class="form-horizontal" method="POST" action="{{url('save_event')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label"><h5 class="box-title">Nama Kegiatan</h5>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Masukkan nama Kegiatan"
                    required="">
                  </div>
                </div><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label"><h5 class="box-title">Jenis Kegiatan</h5>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="jenis_kegiatan" required="">
                      <option value="" disabled="">Pilih Jenis Kegiatan</option>
                     
                        @foreach ($event as $data)
                      <option value="{{$data->nama_keg}}">{{$data->nama_keg}}</option>
                      
                      @endforeach
                    </select>
                  </div>
                </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label"><h5 class="box-title">Tanggal Kegiatan</h5>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="date" class="form-control" name="tanggal_kegiatan" placeholder="Masukkan Tanggal"
                    required="">
                  </div>
              </div><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label"><h5 class="box-title">Deskripsi Singkat Kegiatan</h5>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="deskripsi_kegiatan" placeholder="Masukan Deskripsi Singkat Kegiatan"
                    required="">
                  </div>
              </div><br><br><br>

              <div class="col-lg-3 col-sm-9">
                <div class="box-body">
                  <button type="submit" class="btn btn-block btn-success">Simpan</button>   
                 </div>
              </div>

                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <script src="/vendor'/formvalidation/formValidation.min.js"></script>
  <script src="/vendor'/formvalidation/framework/bootstrap.min.js"></script>
          
<script>
  $(document).ready(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

  <script>
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function($) {
        Site.run();
      });

      // Example Validataion Full
      // ------------------------
      (function() {
        $('#exampleFullForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton1',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                stringLength: {
                  min: 6,
                  max: 30
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9]+$/
                }
              }
            }
        });
      })();
    })(document, window, jQuery);
  </script>

@endsection