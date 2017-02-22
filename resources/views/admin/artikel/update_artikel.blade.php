@extends('layouts.design')
@section('content')
<div class="page animsition">
<div class="page-header" style="margin-bottom: -520px">
      <h1 class="page-title">Update Artikel</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Artikel</li>
        <li class="active">Update Artikel</li>
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
            <form class="form-horizontal" method="POST" action="{{url('save_edited_art')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
            <input type="hidden" name="id" value="{{$artikel->id}}">
            </div>
              <div class="box-body">
                <div class="form-group">
                  <h4 class="box-title">Judul Artikel</h4>
                  <input name="judul" type="judul" class="form-control" id="judul" value="{{$artikel->judul}}" placeholder="Masukkan Judul" >
                </div>
              </div>


              <h4 class="box-title">Content Artikel</h4>
              
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea id="content" name="content" value="" placeholder="Masukkan beberapa tulisan disini">{{$artikel->content}}</textarea>
            </div>

<br>
<label for="exampleInputFile">Input Foto</label>
            <div class="input-group input-group-file">
            
                    <input type="text" class="form-control" readonly name="foto" value="{{$artikel->foto}}">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="foto" multiple="" value="{{$artikel->foto}}"">
                      </span>
                    </span>
                  </div>
<br>

            <!-- <a href="{{url('/update',$artikel->id">
 -->        <div class="box-body">
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