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
		$useronline=UserOnline::where('started_at','>',Carbon::now()->format('Y-m-d'))->select('time',DB_RAW(' TIMEDIFF(ended_at,started_at) ')->get();
		dd($useronline->toArray());
		unset($useronline);
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
