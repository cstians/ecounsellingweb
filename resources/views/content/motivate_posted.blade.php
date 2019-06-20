@extends('master_layout')

@section('page_title','Admin | Broadcasted Motivations')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Broadcasted Motivations</h2>
                        <a href="{{ url('motivation') }}">Back to Broadcast Motivation</a>
                        </div>
                    </div>
                </div>
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
                <!-- general form elements disabled -->
                <div class="row m-t-25" style="align: center">
                    <div class="col-sm-6 col-lg-12">
                        <div class="table-responsive table-responsive-data2">
                         <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th>Posted On</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($motivs as $motiv)
                                        <tr class="tr-shadow">
                                            <td>{{ $motiv->id }}</td>
                                            <td>{{ $motiv->URL }}</td>
                                            <td>{{ $motiv->Description }}</td>
                                            <td>{{ $motiv->created_at }}</td>
                                            <td>
                                                <div class="table-data-feature">    
                                                        <form action="remove_motiv" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE"/>
                                                            <input type="hidden" name="nid" value="{{ $motiv->id }}"/>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                    
    
@endsection