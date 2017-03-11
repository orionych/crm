<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';
	public function offer_versions() {
		return $this->belongsToMany('App\OfferVersion')->withPivot('count', 'price','time');		
	}
	public function equipment_names() {
		
	}
}
