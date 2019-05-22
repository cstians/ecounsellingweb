@extends('master_layout')

@section('page_title','Admin | View Feedbacks')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Feedbacks</h2>
                        </div>
                    </div>
                </div>
                @if(Session::has('message'))
                    <div class="sufee-alert alert with-close alert-success alert-dismissable fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif
                <div class="row m-t-25">
                        <!-- <div class="col-sm-6 col-lg-3"> -->
                        @foreach($feedback as $feedback)
                                <div class="col-md-4">
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0 text-light">
                                                <p class="text-light">{{$feedback['Message']}}</p>
                                                <footer class="blockquote-footer text-light">
                                                    <cite title="Source Title"></cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                        <div class="card-footer">
                                          <form action="{{ route('deletefeedback') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE"/>
                                            <input type="hidden" name="feedback_id" value="{{ $feedback['id'] }}"/>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
    
                               
@endsection