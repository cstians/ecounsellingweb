<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth; 
use Validator;

class UserController extends Controller
{
     public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('LaraPass')-> accessToken; 
            return response()->json(['success' => $success], 200); 
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
            'designation' => $request->designation
        ]);

        $user->save();
	    return response()->json([
			'message' => 'Successfully created user!'
	  	], 201);
    }
}
