<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	public function firm()
	    {
	        return $this->belongsTo('App\Firm');
	    }
	public function requests()
	{
	        return $this->hasMany('App\Request');
	}
}
