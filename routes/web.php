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

Route::get('answer', 'AnswerController@index')->name('answer')->middleware('revalidate');

Route::get('feedbacks', 'FeedbackController@index')->name('feedbacks');

Route::get('stories', 'StoryController@index')->name('stories');

Route::get('notifications', 'NotificationController@index')->name('notifications');

Route::get('motivation', 'MotivationController@index')->name('motivation');

Route::get('addadmin', function() {
    return view('content.addadmin');
})->name('addadmin');

Route::get('removeadmin', function() {
    return view('content.removeadmin');
})->name('removeadmin');

Route::get('displayadmins', function() {
    return view('content.viewadmins');
})->name('displayadmins');

Route::get('search', function() {
    echo 'Search';
})->name('search');

Route::get('settings', function() {
    echo 'Settings hit';
})->name('settings');

Route::post('addanswer', 'QuestionController@update');
