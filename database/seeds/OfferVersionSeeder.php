<?php

use App\Okv;
use App\Offer;
use Carbon\Carbon;
use App\OfferVersion;
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
    		$o=Offer::create([
    			'id'		=>$offer->id,
    			'request_id'	=>$offer->requestid,
    			'number'	=>intval($offer->realid),
    			'created_at'	=> ($offer->datetime!='0000-00-00'?Carbon::createFromFormat('Y-m-d',$offer->datetime)->toDateTimeString():Carbon::now()->toDateTimeString())
    			]);
    		$v=OfferVersion::create([
    			'offer_id'	=>$o->id,
    			'version'	=>1,
    			'name'		=>iconv('KOI8-R','UTF-8',$offer->name),
    			'okv_id'	=>Okv::oldId($offer->currency),
    			'vat'		=>($offer->nds==1?18:0),
    			'time'		=>$offer->delivery,
    			'time_plus'	=>$offer->deliveryshift,
    			'ourpayment'	=>($offer->deliverypayerid==2?false:true),
    			 'created_at'	=>($offer->datetime!='0000-00-00'?Carbon::createFromFormat('Y-m-d',$offer->datetime)->toDateTimeString():Carbon::now()->toDateTimeString())
    			]);
    	}
    }
}
