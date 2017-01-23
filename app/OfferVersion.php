<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferVersion extends Model
{
	public function prices() {
		return $this->belongsToMany('App\Price');		
	}
}
