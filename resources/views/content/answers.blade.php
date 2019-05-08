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
                                            <button class="au-btn au-btn--green" data-toggle="modal" data-target="#answerBox">Answer</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            @endforeach                        
    
        
                        <!-- </div> -->
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="answerBox" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="scrollmodalLabel">{{ $question['question'] }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            {{ $question['description'] }}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
@endsection