<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
	public function offer_versions() {
		return $this->belongsToMany('App\OfferVersion');		
	}
	public function equipment() {
	   	return $this->belongsTo('App\Equipment');
	}
}
