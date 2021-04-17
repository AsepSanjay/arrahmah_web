@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Tambah Tantangan</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Tantangan</li>
        <li class="active">Tambah Tantangan</li>
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
            <form class="form-horizontal" method="POST" action="{{url('save_tantangan')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>

            <div class="box-body">
              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Tema Materi</h4>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                     <select class="form-control" id="company" name="tema_tantangan" required="">
                      <option value=""></option>
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
                  <input name="judul_tantangan" type="text" class="form-control" id="company" placeholder="Masukkan judul tantangan" required="">
                </div>
              </div><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  <h4 class="box-title">Deskripsi Tantangan</h4>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <textarea type="text" class="form-control" name="deskripsi_tantangan" placeholder="Masukkan deskripsi tantangan"    required=""></textarea>
                  </div>
              </div><br><br><br><br>

              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                    <h4 class="box-title">Contoh Gambar</h4>
                  
                    <div class="input-group input-group-file">
                      <input type="text" class="form-control" readonly="" value="">
                      <span class="input-group-btn">
                        <span class="btn btn-success btn-file">
                          <i class="icon wb-upload" aria-hidden="true"></i>
                          <input type="file" name="contoh_foto" multiple="">
                        </span>
                      </span>
                  </div></label>
              </div><br><br><br><br>
            <!-- <a href="{{url('/update',$artikel->id">
 -->        <div class="col-lg-3 col-sm-9">
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