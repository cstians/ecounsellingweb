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
                    <input class="form-control" placeholder="New Password" style="width: 500px; margin: 10px;" type="password" name="newpassword"/> &nbsp;
                    <button class="btn btn-primary" type="submit">Change Password</button>    
                </form>
                </div>
                <br/>
                
    
@endsection