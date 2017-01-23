<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Okved extends Model
{
	public $timestamps = false;
	public $incrementing = false;
	public function comments()
	{
	        return $this->hasMany('App\Comment');
	}
}
