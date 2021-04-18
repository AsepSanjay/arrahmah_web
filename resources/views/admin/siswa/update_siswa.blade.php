@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Sunting Data Siswa</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Siswa</li>
        <li class="active">Sunting Data Siswa</li>
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
            <form class="form-horizontal" method="POST" action="{{route('save_edited_siswa')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$siswa->id}}">
            </div>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Nama Siswa</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Siswa" required="" value="{{$siswa->nama}}">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Kelas</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                     <select class="form-control" id="company" name="kelas" required="">
                      <option>{{$siswa->kelas}}</option>
                      <option value="XI AKL 1">XI AKL 1</option>
                      <option value="XI AKL 2">XI AKL 2</option>
                      <option value="XI OTP 1">XI OTP 1</option>
                      <option value="XI OTP 2">XI OTP 2</option>
                      <option value="XI BDP 1">XI BDP 1</option>
                      <option value="XI BDP 2">XI BDP 2</option>
                      <option value="XI RPL">XI RPL</option>
                    </select>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tempat Lahir</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir"
                      required="" value="{{$siswa->tempat_lahir}}">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tanggal Lahir</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required="" value="{{$siswa->tanggal_lahir}}">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jenis Kelamin</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="jenis_kelamin" required=""">
                      <option>{{$siswa->jenis_kelamin}}</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                      
                    </select>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Alamat</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <textarea type="text" class="form-control" name="alamat" value="{{$siswa->alamat}}" placeholder="Masukkan alamat" required="" >{{$siswa->alamat}}</textarea>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Email</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="email" class="form-control" name="email" value="{{$siswa->email}}" placeholder="Masukkan email" required="" >
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Password</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="password" class="form-control" name="password" value"" placeholder="Masukkan Password" required="" ">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">No Telp</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="no_telp" value="{{$siswa->no_telp}}" placeholder="Masukkan nomor telp" required="">
                  </div>
              </div><br><br><br><br> 

              <div class="form-group">
                <h4 class="box-title">Input Foto</h4>
                <div class="input-group input-group-file">
            
                    <input type="text" class="form-control" readonly="" value="{{$siswa->foto_profile}}">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="foto_profile" multiple="">
                      </span>
                    </span>
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