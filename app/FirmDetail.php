<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmDetail extends Model
{
	public $timestamps = false;
	public function countries() {
		return $this->belongsToMany('App\Country');		
	}
	public function firm_types() {
		return $this->belongsToMany('App\FirmType');		
	}

}
