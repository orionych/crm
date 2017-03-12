<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentName extends Model
{
	public function equipment() {
	   	return $this->belongsTo('App\Equipment');
	}
	public function equipment_name_type() {
	   	return $this->belongsTo('App\EquipmentNameType');
	}
}
