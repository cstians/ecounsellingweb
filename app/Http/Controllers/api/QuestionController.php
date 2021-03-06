<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session; 

use App\Question as question;
use DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //To store the user question

        $question = new Question([
            'question' => $request->question,
            'description' => $request->description,
            'askedby' => $request->authUser,
        ]);

        $question->save();
	    return response()->json([
			'message' => 'Question Submitted Successfully'
	  	], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Admin answer response, limited to one answer only
        //Needs database normalization of more than one answer can be added


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getQuery(Request $request){
        $authUser=$request->authUser;

        $data=DB::table('questions')->select('question','description','answer','askedby')->where('askedby','!=',$authUser)->get();

        return response()->json(
            $data,
        201);

    }

    public function getAnswer(Request $request){
        //$authuser=$request->authUser;
        $authuser=$request->authUser;

        $data=DB::table('questions')->select('question','answer')->where('askedby','=',$authuser)->get();

        return response()->json(
         $data,
        201);
    }

    public function peerViewQuery(){
        $data=DB::table('questions')->select('question','answer')->get();

        return response()->json(
            $data,

        201);
    }
}
