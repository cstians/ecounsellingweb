@extends('master_layout')

@section('page_title','Admin | Motivate Audience')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Motivate Audience</h2>
                        </div>
                    </div>
                </div>
                <br/>
                <!-- general form elements disabled -->
          <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Send Multimedia</h3>
                </div><br/>
                <!-- /.box-header -->
                <div class="box-body">
                  <form action="{{ route('motivation') }}" method="post">
                  @csrf
                    <!-- text input -->
                    <div class="form-group">
                      <label>URL</label>
                      <input type="text" class="form-control" name="motiURL" placeholder="Enter video Link">
                    </div>
    
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3" name="description" placeholder="Enter Description"></textarea>
                      <br/>
                      @if(Session::has('message'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissable fade show">
                        <span class="badge badge-pill badge-success">Success</span>
                          {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                      @endif
                      <button type="submit" class="btn btn-info">Send</button>
                      
    
    
@endsection