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
                            <h2 class="title-1">Answer Queries</h2>
                        </div>
                    </div>
                </div>
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
                                        @else
                                        
                                            <form action="submitanswer/{{ $question['id'] }}" method="POST">
                                            @csrf 
                                                <textarea placeholder="Please type your answer here..." name="answer"></textarea><br/>
                                                
                                        @endif    
                                        <button class="au-btn au-btn--green" data-toggle="modal" type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach                        
    
        
                        <!-- </div> -->
                    </div>


@endsection