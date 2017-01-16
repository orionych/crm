<?php

use App\User;

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

	// $usertmp=DB::table('users')->find(1);
	// $user=Auth::loginUsingId($usertmp->id);
	#print_r($_SERVER);
	Route::get('/', function() {
		$users=User::all();
		print_r($users);
		return view('welcome');});
	Route::get('/someUrl', function() {return 'Super CRM system '.csrf_token().' ';});
	//Route::get('/someUrl', function() {return Response::error('404');});


