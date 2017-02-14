<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOnline extends Model
{
	public $timestamps = false;
	private $userid;
	protected $fillable = ['user_id','ended_at'];
	function __construct($userid)
	{
		$this->user_id=$userid;
	}
	public function getTotalTime() {
		return 10;
	}
}
