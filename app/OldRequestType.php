<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldRequestType extends Model
{
	protected $connection = 'oldcrm';
	protected $table = 'crm_requests_types';
}
