<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
	public function okved() {
	   	return $this->belongsTo('App\Okved');
	}
    	public function clients()
	{
	        return $this->hasMany('App\Client');
	}
	public function requests() {
		return $this->hasManyThrough('App\Client', 'App\Request');
	}
}
