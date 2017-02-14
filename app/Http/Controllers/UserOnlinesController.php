<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\UserOnline;
use Illuminate\Http\Request;

class UserOnlinesController extends Controller
{
public function __construct()
	{
		$this->auth_user = \Auth::user();
	}
public function start(Request $request)
	{	
		$useronline=new UserOnline;
		$useronline->user_id=$this->auth_user->id;
		$useronline->save();

		
		
		return $useronline;
	}
public function end(Request $request)
	{	
		$data=$request->all();
		$useronline=UserOnline::find($data['id']);
		$useronline->ended_at=Carbon::now();
		$useronline->update();
		return $useronline;
	}
}
