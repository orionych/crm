<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
	public $table = "users";
    function isAdmin()
    {
    	return $this->can('user_admin');
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permissions');
    }
}
