<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldClient extends Model
{
    protected $connection = 'oldcrm';
	protected $table = 'crm_clients';
}
