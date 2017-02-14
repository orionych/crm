<?php

namespace App\Http\Controllers;

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
		echo $data['id'];	
		dd($data);	
		$useronline=UserOnline::get($data->id);
		$useronline->ended_at=Carbon::now();
		$useronline->save();
		return $useronline;
	}
}
