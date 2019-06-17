<?php

use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('revalidate');
Route::post('changepassword', 'HomeController@changePassword')->name('changepassword');

Route::get('answer', 'AnswerController@index')->name('answer')->middleware('revalidate');
Route::post('submitanswer/{qid}', 'AnswerController@updateAnswer');
Route::get('displayanswered', 'AnswerController@displayAnswered')->name('displayanswered');
Route::delete('deletequery', 'AnswerController@destroy')->name('deletequery');

Route::get('feedbacks', 'FeedbackController@index')->name('feedbacks');

Route::post('feedbacks', 'FeedbackController@store')->name('feedback');
Route::delete('deletefeedback', 'FeedbackController@destroy')->name('deletefeedback');

Route::get('stories', 'StoryController@index')->name('stories');
Route::delete('deletestory', 'StoryController@destroy')->name('deletestory');
Route::get('editstory', 'StoryController@edit')->name('editstory');


Route::get('notifications', 'NotificationController@index')->name('notifications');

Route::post('notification', 'NotificationController@store')->name('notification');

Route::get('motivation', 'MotivationController@index')->name('motivation');

Route::post('motivation', 'MotivationController@store')->name('motivation');

Route::get('displayadmins', 'HomeController@showAdminList')->name('displayadmins');
Route::delete('remove_admin', 'HomeController@destroy')->name('remove_admin');

Route::get('verifypeer', 'VerifyPeerController@index')->name('verifypeer');

Route::get('search', function() {
    echo 'Search';
})->name('search');

Route::get('settings', 'SettingController@index')->name('settings');

Route::post('addanswer', 'QuestionController@update');
