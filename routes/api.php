<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getjsondata', function() {
	$arr = array("one" => "Doten", "two" => "Galley", "three" => "Khusant", "four" => "Sonam");
	echo json_encode($arr);
});

Route::post('login', 'api\UserController@login');

Route::post('signup', 'api\UserController@signup');
