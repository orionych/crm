<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    // function isAdmin()
    // {
    // 	return $this->can('user_admin');
    // }
    function isAdmin()
    {
    	return in_array('user_admin',$this->permissions()->pluck('name')->all());
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
    public function getPermission()
    {
    	return $this->permissions();
    }
}
