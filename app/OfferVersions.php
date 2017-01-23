<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferVersions extends Model
{
	public function prices() {
		return $this->belongsToMany('App\Role');		
	}
}
