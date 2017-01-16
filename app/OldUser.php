<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldUser extends Model
{
	protected $connection = 'oldcrm';
	protected $table = 'arsenal_users';
}
