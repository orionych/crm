<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    public function okved() {
    	return $this->belongsTo('App\Okved');
    }
}
