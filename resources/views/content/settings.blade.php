@extends('master_layout')

@section('page_title','Admin | Settings')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Account Settings</h2>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <div class="row">
                <p>Change Your Password for <b>{{ $user->name }}</b></p></div>
                <br/>
                <div class="form-group">
                <form action="changepassword" method="POST">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid"/>
                    <input class="form-control" placeholder="Old Password" style="width: 500px; margin: 10px;" type="password" name="old_password" required/>
                    <input class="form-control" placeholder="New Password" style="width: 500px; margin: 10px;" type="password" name="new_password" required/>
                    <input class="form-control" placeholder="Re-enter to confirm New Password" style="width: 500px; margin: 10px;" type="password" name="confirm_password" required/>
                    <button class="btn btn-primary" type="submit">Change Password</button>
                    @if(Session::has('error_message'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissable fade show">
                            <span class="badge badge-pill badge-success">Failed</span>
                                {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                </form>
                </div>
                <br/>
                <div class="form-group">
                <form action="deactivate" method="POST">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid"/>
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn btn-danger" type="submit">Deactivate Account</button>
                    @if(Session::has('error_message'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissable fade show">
                            <span class="badge badge-pill badge-success">Failed</span>
                                {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                </form>
                </div>
@endsection