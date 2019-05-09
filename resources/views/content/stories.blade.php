@extends('master_layout')

@section('page_title','Admin | Review Stories')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Review Stories</h2>
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


                @foreach($stories as $story)
                <div class="row m-t-25">
                    <!-- <div class="col-sm-6 col-lg-3"> -->
                            <div class="col-md-4">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0 text-light">
                                            <p class="text-light">{{ $story['story'] }}</p>
                                        </blockquote>
                                    </div>
                                    <div class="card-footer">
                                    
                                        
                                        <form action="{{ route('deletestory') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <input type="hidden" name="story_id" value="{{ $story['id'] }}"/>
                                        <button class="au-btn au-btn--green">Post</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <button class="btn btn-danger btn-red" type="submit">Remove</button>
                                        
                                    </form>
                                    </div>
                                </div>
                </div>
                @endforeach
                    <!-- </div> -->
                </div>
@endsection