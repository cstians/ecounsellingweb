<?php

namespace App\Http\Controllers;

use App\Motivation;
use Illuminate\Http\Request;

class MotivationController extends Controller
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
        return view('content.motivate');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function show(Motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function edit(Motivation $motivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motivation $motivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motivation $motivation)
    {
        //
    }
}
