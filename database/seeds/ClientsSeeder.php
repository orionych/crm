<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$clients=DB::connection('oldcrm')->table('crm_clients')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('clients')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard();    
    	foreach ($clients as $client)
    	{
    		Client::create([
    			'id'=>$client->id,
    			'name'		=> iconv("KOI8-R","UTF-8",$client->fio),
    			'firm_id'	=> iconv("KOI8-R","UTF-8",$client->firmid),
    			'fired'	=> 	intval($client->fired)
    			]);
    	}
    }
}
