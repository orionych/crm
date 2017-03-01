<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
public function users() {
	$this->belongsTo('App\User');
}
}
