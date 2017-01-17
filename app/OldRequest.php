<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldRequest extends Model
{
	protected $connection = 'oldcrm';
	protected $table = 'crm_requests';
}
