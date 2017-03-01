<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	public function user() {
		return $this->belongsTo('App\User');
	}
	public function by_user() {
		return $this->belongsTo('App\User','by_user_id');
	}
}
