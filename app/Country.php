<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    	protected $table = 'countries';
	public $timestamps = false;
	public $incrementing = false;
	public function firm_details() {
		return $this->belongsToMany('App\FirmDetail');		
	}
}
