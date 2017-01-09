<?php

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
use App\User;

	$usertmp=DB::table('users')->find(1);
	$user=Auth::loginUsingId($usertmp->id);
	#print_r($_SERVER);
	Route::get('/', 'UsersController@index');
