<?php

use App\Request;
use App\OldRequest;
use Illuminate\Database\Seeder;

class OldRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$requests=OldRequest::all();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('requests')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard(); 
    	foreach ($requests as $request)
    	{
    	Request::create([
    		'id'	=>$request->id,
    		'request_type_id'	=>$request->typeid,
    		'client_id'	=> $request->clientid,
    		'created_at'	=> $request->time,
    		
    		]);
    	}   
    }
}
