<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
	public $timestamps = false;
public statcfunction work($day) {
	$day=date("w",strtotime($day));
	return $day;		
	}
    //
}
