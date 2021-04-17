@extends('layouts.design')
@section('content')
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Sunting Tema Materi</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Materi</li>
        <li class="active">Sunting Tema Materi</li>
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
            <form class="form-horizontal" method="POST" action="{{url('save_edited_tema_materi')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
            <input type="hidden" name="id" value="{{$materi->id}}">
            </div>
              <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">
                  </label>
                  <div class="form-group">
                    <label class="col-lg-12 col-sm-3 control-label">
                      <h4 class="box-title">Tema Materi</h4>
                    </label>
                    <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="tema_materi" placeholder="Masukkan tema materi"
                    required="" value="{{$materi->tema_materi}}">
                  </div>
              </div><br><br><br><br><br>


            <!-- <a href="{{url('/update',$artikel->id">
 -->       <div class="box-body">
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