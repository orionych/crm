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
		$useronline=new UserOnline;
		$useronline->user_id=$this->auth_user->id;
		$useronline->save();
		return $useronline;
	}
}
