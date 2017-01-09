<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
	protected $auth_user;

	public function __construct()
	{
		$this->auth_user = \Auth::user();
	}


    public function index() {
	if ($this->auth_user->can('admin_user',$this->auth_user))
	{
    	echo 'here';
	}
	if (Gate::allows('user_admin'))
	{
    	echo 'here2';
	}
    }
}
