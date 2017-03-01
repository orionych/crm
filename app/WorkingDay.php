<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
public $timestamps = false;
public static function work($day) {
	$day=date("w",strtotime($day));
	
	if (($day==0)||($day==6)) {return false;}
	return true;		
	}
    //
}
