<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
	public $timestamps = false;
public function __constructor($day) {
	$day=date("w",strtotime($day));
	return $day;		
	}
    //
}
