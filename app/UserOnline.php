<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOnline extends Model
{
	public $timestamps = false;
	public $user_id;
	protected $fillable = ['user_id','ended_at'];
	public function getTotalTime() {
		return 10;
	}
}
