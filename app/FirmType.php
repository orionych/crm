<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmType extends Model
{
	public $timestamps = false;
	public function firm_details() {
		return $this->belongsToMany('App\FirmDetail');		
	}
}
