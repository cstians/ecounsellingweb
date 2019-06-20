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

Route::post('login', 'api\UserController@login');

Route::post('signup', 'api\UserController@signup');

Route::post('addquestion', 'api\QuestionController@store');

Route::get('getquestion', 'api\QuestionController@show');

Route::get('getlink','api\MotivationController@getlink');

Route::post('getuser','api\UserController@getUser');
Route::post('getquestions','api\QuestionController@getQuery');

Route::post('getanswer','api\QuestionController@getAnswer');

Route::get('peerviewquery','api\QuestionController@peerViewQuery');

Route::post('feedback','api\FeedbackController@store');

Route::post('notifications','api\NotificationController@index');

Route::post('postStories', 'api\StoryController@store');