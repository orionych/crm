<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldFirms extends Model
{
    protected $connection = 'oldcrm';
 	protected $table = 'crm_firms';
}
