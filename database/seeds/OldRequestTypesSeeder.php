<?php

use App\OldRequestType;
use Illuminate\Database\Seeder;

class OldRequestTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$requeststypes=OldRequestType::all();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('request_types')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard(); 
    	foreach ($requeststypes as $requesttype)
    	{
    		
    	}
    }
}
