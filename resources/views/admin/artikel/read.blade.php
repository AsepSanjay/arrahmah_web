@extends('layouts.design')
@section('content')
<div class="page animsition">
    <div class="page-aside">
      <div class="page-aside-switch">
        <i class="icon wb-chevron-left" aria-hidden="true"></i>
        <i class="icon wb-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner">
        <section class="page-aside-section">
          <h5 class="page-aside-title">Main</h5>
          <div class="list-group">
            <a class="list-group-item active" href="{{url('/admin/artikel/data_artikel/update/')}}/{{$artikel->id}}"><i class="icon wb-edit" aria-hidden="true"></i>Edit Artikel</a>
          </div>
        </section>
      </div>
    </div>
    <div class="page-main">
      <div class="page-header">
        <h1 class="page-title">{{$artikel->judul}}</h1>
      </div>
      <div class="page-content">
        <div class="panel">
          <div class="panel-heading">
            <h4 class="panel-title">{{$artikel->tanggal}}</h4>
          </div>
          <div class="panel-body">
            <p>{!!$artikel->content!!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection