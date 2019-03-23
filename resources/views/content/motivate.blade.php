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
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>URL</label>
                      <input type="text" class="form-control" placeholder="Enter video Link">
                    </div>
    
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                      <br/>
                      <button type="submit" class="btn btn-info">Send</button>
                    </div>
    
@endsection