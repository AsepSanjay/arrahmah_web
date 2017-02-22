@extends('layouts.design')
@section('content')
<div class="page animsition">
  <div class="page-header" style="margin-bottom: -550px">
        <h1 class="page-title">Input Gambar</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/admin')}}">Beranda</a></li>
          <li class="active">Galeri</li>
          <li class="active">Input Gambar</li>
        </ol>
  </div>
</div>
<div class="page">
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
            <form class="form-horizontal" method="POST" action="{{url('save_gallery')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
              <div class="box-body">
                <div class="form-group">
                  <h4 class="box-title">Keterangan Gambar</h4>
                  <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan Gambar">
                </div>
              </div>

              <h4 class="box-title">Input Gambar</h4>
              <div class="input-group input-group-file">
              
                      <input type="text" class="form-control" readonly="" value="">
                      <span class="input-group-btn">
                        <span class="btn btn-success btn-file">
                          <i class="icon wb-upload" aria-hidden="true"></i>
                          <input type="file" name="foto" multiple="">
                        </span>
                      </span>
              </div><br><br>
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