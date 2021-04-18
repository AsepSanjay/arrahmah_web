@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Sunting Kuis</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Kuis</li>
        <li class="active">Perbarui Kuis</li>
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
            <form class="form-horizontal" method="POST" action="{{route('save_edited_kuis')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$kuis->id}}">
            </div>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tema Kuis</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                     <select class="form-control" id="company" name="tema_kuis" required="">
                      <option>{{$kuis->tema_kuis}}</option>
                      <option value="Hormat kepada orang tua">Hormat kepada orang tua</option>
                      <option value="Hormat kepada guru">Hormat kepada guru</option>
                    </select>
                  </div>
              </div><br><br><br><br>

              
              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Soal</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <textarea type="text" class="form-control" name="soal" value="{{$kuis->soal}}" placeholder="Masukkan alamat" required="" >{{$kuis->soal}}</textarea>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jawaban A</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="jawaban_a" value="{{$kuis->jawaban_a}}" placeholder="Masukkan email" required="" >
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jawaban B</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="jawaban_b" value="{{$kuis->jawaban_b}}" placeholder="Masukkan Password" required="" >
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jawaban C</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="jawaban_c" value="{{$kuis->jawaban_c}}" placeholder="Masukkan nomor telp" required="">
                  </div>
              </div><br><br><br><br> 

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jawaban D</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="jawaban_d" value="{{$kuis->jawaban_d}}" placeholder="Masukkan nomor telp" required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jawaban E</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="jawaban_e" value="{{$kuis->jawaban_e}}" placeholder="Masukkan nomor telp" required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jawaban Benar</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="jawaban_benar" value="{{$kuis->jawaban_benar}}" placeholder="Masukkan nomor telp" required="">
                  </div>
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