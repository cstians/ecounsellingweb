<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Question as question;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        //Shows all the unanswered questions to the admin
        $questions=question::all()->where('answer', null);
        $type=['type'=>'unanswered'];
        return view('content.answers', compact('questions', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $qid)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $answer)
    {
        $deleteQuery = question::find($answer->question_id);
        $deleteQuery->delete();
        return back()->with('message', 'The Query is removed as for all users');
    }

    public function updateAnswer($id, Request $request) {
        DB::table('questions')->where('id', $id)->update(['answer' => $request->answer]);
        $questions=question::all()->where('answer', null);
        $type=['type'=>'unanswered'];
        return view('content.answers', compact('questions', 'type'));
    }

    public function displayAnswered() {
        $questions=\App\Question::all()->where('answer');
        $type=['type'=>'answered'];
        return view('content.answers', compact('questions', 'type'));
    }
}
