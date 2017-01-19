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
	$users=DB::table('users')->get();
	
	$user=Auth::loginUsingId(1);
	#print_r($_SERVER);
	Route::get('/', function() {
		return view('welcome');});
	Route::get('/someUrl', function() {return 'Super CRM system '.csrf_token().' ';});
	//Route::get('/someUrl', function() {return Response::error('404');});


