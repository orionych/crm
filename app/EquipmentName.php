<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentName extends Model
{
	public function equipment() {
	   	return $this->belongsTo('App\Equipment');
	}
}
