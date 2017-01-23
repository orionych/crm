<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Okved extends Model
{
	public $timestamps = false;
	public $incrementing = false;
	public function firms()
	{
	        return $this->hasMany('App\Firm');
	}
}
