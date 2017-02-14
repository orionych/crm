<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserOnlinesController extends Controller
{
public function __construct()
	{
		$this->auth_user = \Auth::user();
	}
public function create()
	{
		
	}
}
