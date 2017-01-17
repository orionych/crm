<?php

use App\Client;
use App\OldClient;
use Illuminate\Database\Seeder;

class OldClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$clients=OldClient::all();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('clients')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard();    
    	foreach ($clients as $client)
    	{
    		Client::create([
    			'id'=>$client->id,
    			'name'		=> iconv("KOI8-R","UTF-8",$firm->name),

    			]);
    	}
    }
}
