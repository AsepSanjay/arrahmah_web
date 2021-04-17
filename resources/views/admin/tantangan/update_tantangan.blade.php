@extends('layouts.design')
@section('content')

<div class="page">
<div class="page-header">
      <h1 class="page-title">Sunting Data Tantangan</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Tantangan</li>
        <li class="active">Sunting Data Tantangan</li>
      </ol>
    </div><br>


<div class="page-content padding-30 container-fluid">
    <div class="row" data-plugin="matchHeight" data-by-row="true">
      <div class="col-xlg-6 col-md-12">
          <!-- Panel Predictions -->
        <div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
          <div class="widget-content widget-radius bg-white">
            <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">
                <div class="row">
                  <div class="box">
                  <div class="box-header">
            <form class="form-horizontal" method="POST" action="{{route('save_edited_tantangan')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$tantangan->id}}">
            </div>

              <div class="box-body">
              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tema Materi</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                     <select class="form-control" id="company" name="tema_tantangan" required="">
                      <option value="">{{$tantangan->tema_tantangan}}</option>
                      <option value="Hormat kepada orang tua">Hormat kepada orang tua</option>
                      <option value="Hormat kepada guru">Hormat kepada guru</option>
                    </select>
                  </div>
              </div>
            </div><br><br><br><br>  

             <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Judul Tantangan</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                  <input name="judul_tantangan" type="text" class="form-control" id="company" placeholder="Masukkan judul tantangan" required="" value="{{$tantangan->tema_tantangan}}">
                </div>
              </div><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Deskripsi Tantangan</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <textarea type="text" class="form-control" name="deskripsi_tantangan" placeholder="Masukkan deskripsi tantangan"    required="">{{$tantangan->deskripsi_tantangan}}</textarea>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Contoh Gambar</h4>
                  
                    <div class="input-group input-group-file">
                      <input type="text" class="form-control" readonly="" value="{{$tantangan->tema_tantangan}}">
                      <span class="input-group-btn">
                        <span class="btn btn-success btn-file">
                          <i class="icon wb-upload" aria-hidden="true"></i>
                          <input type="file" name="contoh_foto" multiple="">
                        </span>
                      </span>
                  </div></label>
              </div><br><br><br><br>

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

  <script src="/vendor'/formvalidation/formValidation.min.js"></script>
  <script src="/vendor'/formvalidation/framework/bootstrap.min.js"></script>

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