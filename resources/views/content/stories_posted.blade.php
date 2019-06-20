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
                                <h2 class="title-1">Review & Post User Stories</h2>
                                <a href="{{ url('stories') }}">View New Stories
                                </a>                               
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
                <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-12">
                            <p>Remove posted stories</p><br/>
                        </div>
                        <!-- <div class="col-sm-6 col-lg-3"> -->
                            @foreach($stories as $story)
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p>{{ $story['story'] }}</p>
                                            </blockquote>
                                        </div>
                                        <div class="card-footer">
                                            <form action="{{ route('deletestory') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE"/>
                                                <input type="hidden" name="story_id" value="{{ $story['id'] }}"/> <br>
                                                <button class="btn btn-danger" type="submit">Delete this Story</button>
                                            </form> 
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            @endforeach                        
    
        
                        <!-- </div> -->
                    </div>

@endsection
