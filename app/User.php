<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    function isAdmin()
    {
    	return $this->can('user_admin');
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permissions');
    }
    public function getPermission()
    {
    	return $this->permissions;
    }
}
