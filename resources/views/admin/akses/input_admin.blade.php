@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Tambah Admin</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Admin</li>
        <li class="active">Tambah Admin</li>
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
            <form class="form-horizontal" method="POST" action="{{url('save_admin')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
              
              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Nama Admin</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Admin"
                    required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Akses</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="role_id" required="">
                      <option value="" ></option>
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
                      required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tanggal Lahir</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir"
                                    required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Jenis Kelamin</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="jenis_kelamin" required="">
                      <option value="" ></option>
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
                    <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan alamat"    required=""></textarea>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Email</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="email" class="form-control" name="email" placeholder="Masukkan email"
                                    required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Password</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                                    required="">
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">No Telp</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="no_telp" placeholder="Masukkan nomor telp"
                                    required="">
                  </div>
              </div><br><br><br><br> 

              <div class="form-group">
                <h4 class="box-title">Input Foto</h4>
                <div class="input-group input-group-file">
            
                    <input type="text" class="form-control" readonly="" value="">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="foto_profile" multiple="">
                      </span>
                    </span>
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
          
<script>
  $(document).ready(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection