<?php

use App\OfferVersion;
use Illuminate\Database\Seeder;

class OfferVersionPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$offers=DB::connection('oldcrm')->table('crm_clients_commercial_offers')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('offers')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");   	
    	Eloquent::unguard(); 
    	foreach ($offers as $offer)
    	{
    		$o=OfferVersion::where('offer_id',$offer->offerid)->first();
    		
    		if (is_object($o)) $o->prices()->attach($offer->priceid,['count'=>$offer->countitem,'price'=>$offer->price,'time'=>$offer->individualtime]);

    	}
    }
}
