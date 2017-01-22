<?php

use App\Price;
use App\Dimension;
use App\Equipment;
use App\EquipmentName;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$okei=array(796,18,839);
	$equipments=DB::connection('oldcrm')->table('crm_price')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('equipments')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");   	
    	Eloquent::unguard(); 
    	foreach ($equipments as $eq)
    	{
    		$equipment=Equipment::create([
    			'id'	=>	$eq->id,
    			'text'	=>	iconv('KOI8-R','UTF-8',$eq->description),
    			'discount' 	=>	$eq->discount,
    			'product_id'	=>	0,
    			'firm_id'	=>	0,
    			'option'		=>	$eq->optionprice,
    			'disabled'	=>	$eq->disabledsearch
    			]);
    		if (trim($eq->code)!='')
    			{
    			EquipmentName::create([
    			'equipment_id'			=>	$equipment->id,
    			'equipment_name_type_id'	=>	1,
    			'name'				=> 	iconv('KOI8-R','UTF-8',$eq->code)
    			]);
    			}
      		if (trim($eq->stockcode)!='')
    			{
    			EquipmentName::create([
    			'equipment_id'			=>	$equipment->id,
    			'equipment_name_type_id'	=>	2,
    			'name'				=> 	iconv('KOI8-R','UTF-8',$eq->stockcode)
    			]);
    			}
    		$okvs=array(643,978);
    		if (floatval($eq->price)!=0.00)
    		{
    			Price::create([
    			'equipment_id'		=>	$equipment->id,
    			'price_type_id'		=>	1,
    			'price'			=>	$eq->price,
    			'okv_id'		=>	$okvs[$eq->currency]
    			]);
    		}
    		// if (floatval($eq->producerprice)!=0.00)
    		// {
    		// 	Price::create([
    		// 	'equipment_id'		=>	$equipment->id,
    		// 	'price_type_id'		=>	2,
    		// 	'price'			=>	$eq->producerprice,
    		// 	'okv_id'		=>	$okvs[$eq->producerpricecurrency]
    		// 	]);
    		// }
    		// if (floatval($eq->recommendedpriceoem)!=0.00)
    		// {
    		// 	Price::create([
    		// 	'equipment_id'		=>	$equipment->id,
    		// 	'price_type_id'		=>	3,
    		// 	'price'			=>	$eq->recommendedpriceoem,
    		// 	'okv_id'		=>	$okvs[$eq->recommendedpriceoemcurrency]
    		// 	]);
    		// }
    		// if (floatval($eq->recommendedprice)!=0.00)
    		// {
    		// 	Price::create([
    		// 	'equipment_id'		=>	$equipment->id,
    		// 	'price_type_id'		=>	4,
    		// 	'price'			=>	$eq->recommendedprice,
    		// 	'okv_id'		=>	$okvs[$eq->recommendedpricecurrency]
    		// 	]);
    		// }
    		if (intval($eq->optionprice)!=1)
    		{
    			Dimension::create([
    				'equipment_id'	=>	$equipment->id,
    				'okei_id'	=>	$okei[$eq->measure],
    				'dimx'		=>	$eq->dimx,
    				'dimy'		=>	$eq->dimz,
    				'dimh'		=>	$eq->dimy,
    				'places'	=>	$eq->places,
    				'weight'	=>	$eq->weight
    				]);
    		}

    		

    	}
    }
}
