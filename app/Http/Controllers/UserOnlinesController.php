<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\UserOnline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserOnlinesController extends Controller
{
public function __construct()
	{
		$this->auth_user = \Auth::user();
	}
public function start(Request $request)
	{	
		$useronline=UserOnline::where('started_at','>',Carbon::now()->format('Y-m-d'))->where('user_id','=',$this->auth_user->id)->select(DB::raw(' SUM(TIMEDIFF(ended_at,started_at)) as time'))->first();
		$thistime=$useronline['time'];
		unset($useronline);
		$useronline=new UserOnline;
		$useronline->user_id=$this->auth_user->id;
		$useronline->save();
		return Response::json('online'=>$useronline,'status'=>$thistime);
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
