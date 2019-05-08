@extends('master_layout')

@section('page_title','Admin | Answer Queries')

@section('main_content')
   <!-- MAIN CONTENT-->
   <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            
                            @if($type['type'] == 'answered')
                                <h2 class="title-1">Answered Queries</h2>
                                <a href="{{ url('answer') }}">View Unanswered Queries
                                </a>
                            @endif
                            @if($type['type'] == 'unanswered')
                                <h2 class="title-1">Answer Queries</h2>
                                <a href="{{ url('displayanswered') }}">View Answered Queries
                                </a>
                            @endif
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
                            @foreach($questions as $question)
                                <div class="col-md-12">
                                    <div class="card">
                                        <h4 class="card-header">{{ $question['question'] }}</h4>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p>{{ $question['description'] }}</p>
                                                <footer class="blockquote-footer">
                                                    <cite title="Source Title">{{ $question['askedby'] }}</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                        <div class="card-footer">
                                        @if($question['answer'])
                                            {{ $question['answer'] }}
                                            <form action="{{ route('deletequery') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE"/>
                                            <input type="hidden" name="question_id" value="{{ $question['id'] }}"/> <br>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" type="submit">Delete this Query</button>
                                            </form>
                                        @else
                                        
                                            <form action="submitanswer/{{ $question['id'] }}" method="POST">
                                            @csrf 
                                                <textarea cols=115 placeholder="Please type your answer here..." name="answer"></textarea><br/>
                                                <button class="au-btn au-btn--green" data-toggle="modal" type="submit">Submit</button>
                                            </form>
                                        @endif    
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                            @endforeach                        
    
        
                        <!-- </div> -->
                    </div>


@endsection