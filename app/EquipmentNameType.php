<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentNameType extends Model
{
	public function equipment_names() {
		return $this->hasMany('App\EquipmentName');
	}
}
