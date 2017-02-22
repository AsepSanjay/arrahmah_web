@extends('layouts.design')
@section('content')

<div class="page">
<div class="page-header">
      <h1 class="page-title">Edit Admin</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Admin</li>
        <li class="active">Edit Admin</li>
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
            <form class="form-horizontal" method="POST" action="{{route('save_edited_admin')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id" value="{{$admin->id}}">
            </div>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Nama Admin</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Admin" required="" value="{{$admin->nama}}">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Akses</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="role_id" required="">
                      <option value="" >@if($admin->role_id == "1")
                                          Super Admin
                                        @else
                                          Admin
                                        @endif 
                      </option>
                      <option value="1">Super Admin</option>
                      <option value="2">Admin</option>
                      
                    </select>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tempat Lahir</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir"
                      required="" value="{{$admin->tempat_lahir}}">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tanggal Lahir</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required="" value="{{$admin->tanggal_lahir}}">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jenis Kelamin</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="jenis_kelamin" required=""">
                      <option>{{$admin->jenis_kelamin}}</option>
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
                    <textarea type="text" class="form-control" name="alamat" value="{{$admin->alamat}}" placeholder="Masukkan alamat" required="" >{{$admin->alamat}}</textarea>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Email</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="email" class="form-control" name="email" value="{{$admin->email}}" placeholder="Masukkan email" required="" >
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
                    <input type="text" class="form-control" name="no_telp" value="{{$admin->no_telp}}" placeholder="Masukkan nomor telp" required="">
                  </div>
              </div><br><br><br><br> 

              <div class="form-group">
                <h4 class="box-title">Input Foto</h4>
                <div class="input-group input-group-file">
            
                    <input type="text" class="form-control" readonly="" value="{{$admin->foto_profile}}">
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