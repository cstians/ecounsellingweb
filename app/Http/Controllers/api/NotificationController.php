<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = DB::select("select id from users where name = '$request->name'");
        $uid = $user_id[0]->id;
        $sentNotifs = DB::select("select notif_id from usernotifs where user_id = $uid");
        $sent=array();
        foreach($sentNotifs as $result) {
            array_push($sent, $result->notif_id);
        }
        
        
        $notSent = DB::table('notifications')->select('id')->whereNotIn('id', $sent)->get();
        print_r($notSent);
/*        $notifs=DB::table('notifications')->select('title','message')->whereNotIn('id', $sent)->get();
        $updateSent = DB::table('usernotifs')->insert(
            ['user_id' => $uid, 'notif_id' => DB::table('notifications')->select('id')->whereNotIn('id', $sent)->get()]
        );
        return response()->json(
            $notifs, 201);
        */}

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
}
