@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Tambah Kuis</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Kuis</li>
        <li class="active">Tambah Kuis</li>
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
            <form class="form-horizontal" method="POST" action="{{url('save_kuis')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tema Kuis</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="tema_kuis" required="">
                      @foreach ($kuis as $data)
                      <option value="{{$data->tema_materi}}">{{$data->tema_materi}}</option>
                      @endforeach
                    </select>
                  </div>
              </div><br><br><br><br>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Soal</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <textarea type="text" class="form-control" name="soal" placeholder="Masukkan soal anda di sini"    required=""></textarea>
                  </div>
                </div><br><br><br><br>


                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Opsi Jawaban A</h4>
                  </label>
                    <div class=" col-lg-12 col-sm-9">
                      <textarea type="text" class="form-control" name="jawaban_a" placeholder="Masukkan opsi jawaban A"    required=""></textarea>
                    </div>
                </div><br><br><br><br>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Opsi Jawaban B</h4>
                  </label>
                    <div class=" col-lg-12 col-sm-9">
                      <textarea type="text" class="form-control" name="jawaban_b" placeholder="Masukkan opsi jawaban B"    required=""></textarea>
                    </div>
                </div><br><br><br><br>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Opsi Jawaban C</h4>
                  </label>
                    <div class=" col-lg-12 col-sm-9">
                      <textarea type="text" class="form-control" name="jawaban_c" placeholder="Masukkan opsi jawaban C"    required=""></textarea>
                    </div>
                </div><br><br><br><br>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Opsi Jawaban D</h4>
                  </label>
                    <div class=" col-lg-12 col-sm-9">
                      <textarea type="text" class="form-control" name="jawaban_d" placeholder="Masukkan opsi jawaban D"    required=""></textarea>
                    </div>
                </div><br><br><br><br>
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Opsi Jawaban E</h4>
                  </label>
                    <div class=" col-lg-12 col-sm-9">
                      <textarea type="text" class="form-control" name="jawaban_e" placeholder="Masukkan opsi jawaban E"    required=""></textarea>
                    </div>
                </div><br><br><br><br>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Opsi Jawaban Benar</h4>
                  </label>
                    <div class=" col-lg-12 col-sm-9">
                      <textarea type="text" class="form-control" name="jawaban_benar" placeholder="Masukkan opsi jawaban Benar"    required=""></textarea>
                    </div>
                </div><br><br><br><br>

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