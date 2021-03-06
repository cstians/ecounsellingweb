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
                                <a href="{{ url('storiesposted') }}">View & Delete Posted Stories
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
                            <p>Click on the story content to edit the story to correct grammar and spelling errors</p><br/>
                        </div>
                        <!-- <div class="col-sm-6 col-lg-3"> -->
                            @foreach($stories as $story)
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="submitstory" method="POST">
                                                @csrf 
                                            <blockquote class="blockquote mb-0">
                                                <textarea name="story_edited" cols="80" rows="6">{{ $story['story'] }}</textarea>
                                                <input type="hidden" name="sid" value="{{ $story['id'] }}"/>
                                            </blockquote>
                                        </div>
                                        <div class="card-footer">
                                                <button class="au-btn au-btn--green" data-toggle="modal" type="submit">Post this Story</button>
                                            </form>
                                            <form action="{{ route('deletestory') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE"/>
                                                <input type="hidden" name="story_id" value="{{ $story['id'] }}"/> <br>
                                                <button class="btn btn-danger" type="submit">Discard this Story</button>
                                            </form> 
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            @endforeach                        
    
        
                        <!-- </div> -->
                    </div>

@endsection
