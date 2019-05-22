<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth; 
use Validator;
use DB;
class UserController extends Controller
{
     public function login(){
        $userComp;
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            if($user->designation=='Peer'){
                $userComp='User';
            }
            else if($user->designation=='User'){
                $userComp='Peer';
            }
            $success['token'] =  $user->createToken('LaraPass')-> accessToken; 
            return response()->json(['success' => $success,'userType'=>$userComp,'authUser'=>$user->name], 200); 
        } else { 
            return response()->json(['success'=>'Unauthorised'], 401); 
        } 
    }

    public function signup(Request $request) { 

        /*$request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);*/

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'designation' => $request->designation,
            'display_name' => hash('sha256', $request->name.'dgks')
        ]);

        $user->save();
	    return response()->json([
			'message' => 'Successfully created user!'
	  	], 201);
    }

    public function getUser(Request $request){

        $userType=$request->type;

        if($userType=='User'){
            $data=DB::table('users')->select('display_name','designation')->where('designation','User')->get();
        }

        else if($userType=='Peer'){
            $data=DB::table('users')->select('display_name','designation')->where('designation','Peer')->get();

        }
        return response()->json(
            $data,
            201);
    }
}
