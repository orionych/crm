<?php

use App\Offer;
use Illuminate\Database\Seeder;

class OfferVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$offers=DB::connection('oldcrm')->table('crm_clients_commercial_offer')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('offers')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");   	
    	Eloquent::unguard(); 
    	foreach ($offers as $offer)
    	{
    		$Offer::create([
    			'id'		=>$offer->id,
    			'request_id'	=>$offer->requestid,
    			'number'	=>$offer->realid,
    			'created_at'	=> Carbon::createFromTimestamp(strtotime($offer->datetime))
    			]);
    	}
    }
}
