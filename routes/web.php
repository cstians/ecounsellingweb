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
Route::post('changepassword', 'HomeController@changePassword')->name('changepassword')->middleware('revalidate');
Route::delete('deactivate', 'HomeController@destroy')->name('deactivate')->middleware('revalidate');

Route::get('answer', 'AnswerController@index')->name('answer')->middleware('revalidate');
Route::post('submitanswer/{qid}', 'AnswerController@updateAnswer')->middleware('revalidate');
Route::get('displayanswered', 'AnswerController@displayAnswered')->name('displayanswered')->middleware('revalidate');
Route::delete('deletequery', 'AnswerController@destroy')->name('deletequery')->middleware('revalidate');

Route::get('feedbacks', 'FeedbackController@index')->name('feedbacks')->middleware('revalidate');

Route::post('feedbacks', 'FeedbackController@store')->name('feedback')->middleware('revalidate');
Route::delete('deletefeedback', 'FeedbackController@destroy')->name('deletefeedback')->middleware('revalidate');
Route::post('clearfeedbacks', 'FeedbackController@clearall')->name('clearfeedbacks')->middleware('revalidate');

Route::get('stories', 'StoryController@index')->name('stories')->middleware('revalidate');
Route::get('storiesposted', 'StoryController@indexposted')->name('stories')->middleware('revalidate');
Route::delete('deletestory', 'StoryController@destroy')->name('deletestory')->middleware('revalidate');
Route::post('submitstory', 'StoryController@update')->name('submitstory')->middleware('revalidate');


Route::get('notifications', 'NotificationController@index')->name('notifications')->middleware('revalidate');
Route::get('viewnotifs', 'NotificationController@indexposted')->name('viewnotifs')->middleware('revalidate');
Route::delete('remove_notif', 'NotificationController@destroy')->name('remove_notif')->middleware('revalidate');
Route::post('notification', 'NotificationController@store')->name('notification')->middleware('revalidate');

Route::get('motivation', 'MotivationController@index')->name('motivation')->middleware('revalidate');
Route::post('motivations', 'MotivationController@store')->name('motivations')->middleware('revalidate');
Route::delete('remove_motiv', 'MotivationController@destroy')->name('remove_motiv')->middleware('revalidate');
Route::get('viewmotivs', 'MotivationController@indexposted')->name('viewmotivs')->middleware('revalidate');

Route::get('displayadmins', 'HomeController@showAdminList')->name('displayadmins')->middleware('revalidate');
Route::delete('remove_admin', 'HomeController@destroy')->name('remove_admin')->middleware('revalidate');

Route::get('verifypeer', 'VerifyPeerController@index')->name('verifypeer')->middleware('revalidate');

Route::get('search', function() {
    echo 'Future Work!';
})->name('search');

Route::get('settings', 'SettingController@index')->name('settings')->middleware('revalidate');

Route::post('addanswer', 'QuestionController@update')->name('addanswer')->middleware('revalidate');

Route::get('displaypeers', 'HomeController@listPeers')->name('displaypeers')->middleware('revalidate');
Route::post('approve_peer', 'VerifyPeerController@update')->name('approve_peer')->middleware('revalidate');
Route::delete('delete_approval', 'VerifyPeerController@destroy')->name('delete_approval')->middleware('revalidate');
