<?php

use App\RequestType;
use Illuminate\Database\Seeder;

class RequestTypesSeeder extends Seeder
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
    		RequestType::create([
    			'id'	=>$requesttype->id,
    			'name'	=>iconv('KOI8-R','UTF-8',$requesttype->name)
    			]);
    	}
    }
}
