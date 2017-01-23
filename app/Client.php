<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	    public function firms()
	    {
	        return $this->belongsTo('App\Firm');
	    }
}
