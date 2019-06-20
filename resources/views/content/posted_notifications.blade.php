@extends('master_layout')

@section('page_title','Admin | Broadcasted Notification')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Broadcasted Notification</h2>
                        <a href="{{ url('notifications') }}">Back to Broadcast Notification</a>
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
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Posted On</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notifs as $notif)
                                        <tr class="tr-shadow">
                                            <td>{{ $notif->id }}</td>
                                            <td>{{ $notif->title }}</td>
                                            <td>{{ $notif->message }}</td>
                                            <td>{{ $notif->created_at }}</td>
                                            <td>
                                                <div class="table-data-feature">    
                                                        <form action="remove_notif" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE"/>
                                                            <input type="hidden" name="nid" value="{{ $notif->id }}"/>
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