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
		return $this->hasMany('App\EquipmentName');
	}
	// public function equipment_name_types() {
	// 	return $this->hasManyThrough( 'App\EquipmentNameType','App\EquipmentName','equipment_id','equipment_name_type_id');
	// }
}
