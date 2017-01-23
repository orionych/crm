<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferVersion extends Model
{
	public function equipments() {
		return $this->belongsToMany('App\Equipment')->withPivot('count', 'price','time');		
	}
}
