<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    public function okveds() {
    	return $this->belongsTo('App\Okved');
    }
}
