<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    public $officialname;
    // function isAdmin()
    // {
    // 	return $this->can('user_admin');
    // }
    public function isAdmin()
    {
    	return (bool) $this->permissions()->where('name','user_admin')->first();
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
    public function getNameAttribute($name) {
          return $name;
    }
    public function getPermission()
    {
    	return $this->permissions();
    }
    function getOfficalName()
    {
            return preg_replace('/(\w+) (\w)\w+ (\w)\w+/iu', '$1 $2. $3.', $this->name)
    }
    public function getAvatar()
    {
        echo "<img src='http://placehold.it/48x48/ffffff/000000?text=".preg_replace('/(\w)\w+ (\w)\w+ (\w)\w+/iu', '$1$2$3', $this->name)."&fontsize=23' class='img-circle' />";
    }
}
