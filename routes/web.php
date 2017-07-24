<?php

use App\Events\MessagePosted;

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
    return view('welcome');
});

Route::get('/chat', function() {
	return view('chat');
})->middleware('auth');

Route::get('/messages', function() {
	return App\Message::with('user')->get(); //to return messages of specific users
})->middleware('auth');

Route::post('/messages', function() {
	//Store the new message
	$user = Auth::user(); 
	//gets current user

	//for persistent messages
	$message = $user->messages()->create([
		'message' => request()->get('message') 

	]);

	//event that tells the message has been posted
	event(new MessagePosted($message, $user)); 

	//returns confirmation for message
	return ['status' => 'OK'];  
	
})->middleware('auth');






Route::get('/home', 'ProfileController@showFriends');

Route::resource('blog', 'BlogController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
