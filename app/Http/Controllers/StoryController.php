<?php

namespace App\Http\Controllers;

use App\Story as story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
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
        $stories=story::where('post', '0')->get();
        return view('content.stories', compact('stories'));
    }

    public function indexposted() {
        $stories=story::where('post', 1)->get();
        return view('content.stories_posted', compact('stories'));
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
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        return view('content/editstory');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        /*$story_update = Story::where("id", $request->sid)
                ->update( 
                       array( 
                             "story" => $request->story_edited,
                             "post" => '1',
                             )
                       );
        */
        //echo 'UPDATE stories SET story = "'.$request->story_edited.'", post = 1 WHERE id = '.$request->sid;
        DB::statement('UPDATE stories SET story = "'.$request->story_edited.'", post = 1 WHERE id = '.$request->sid);
        return back()->with('message', 'Story Successfully Posted');
                       //$story_update->fill($new_user_data)->save();

                       /*$new_user_data=array('story'=>$request->story_edited,'post'=>'1');
                       User::where('id', $request->)->update($new_user_data);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $story)
    {
        $deleteStory = story::find($story->story_id);
        $deleteStory->delete();
        return back()->with('message', 'The story is removed for all users');
    }
}
