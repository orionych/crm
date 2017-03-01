<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
 protected $fillable = ['name','original_name'];
public function  fileable() {
	return $this->morphTo();	
}
}
