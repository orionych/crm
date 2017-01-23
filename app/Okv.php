<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Okv extends Model
{
    public static function oldId($id) {
    	$okvs=array(0,643,978);    	
    	return $okvs[$id];
    }
}
