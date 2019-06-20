@extends('master_layout')

@section('page_title','Admin | View Professional Counsellors')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">List of Professional Counsellors</h2>
                        <br/>
                            @if(Session::has('message'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissable fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                                {{ Session::get('message') }}&nbsp;
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"> &times;</span>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row m-t-25" style="align: center">
                    <div class="col-sm-6 col-lg-12">
                        <div class="table-responsive table-responsive-data2">
                         <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th colspan="2">Name</th>
                                        <th>Email</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($admins as $admin)
                                        <tr class="tr-shadow">
                                            <td>{{ $admin->id }}</td>
                                            <td colspan="2">{{ $admin->name }}</td>
                                            <td>
                                                <span class="block-email">{{ $admin->email }}</span>
                                            </td>
                                            <td class="desc">Professional Counsellor</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
@endsection