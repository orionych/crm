<?php

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
    		$eq=Equipment::create([
    			'id'	=>	$eq->id,
    			'text'	=>	iconv('KOI8-R','UTF-8',$eq->description),
    			'discount' 	=>	$eq->discount,
    			'product_id'	=>	0,
    			'firm_id'	=>	0,
    			'option'		=>	$eq->optionprice,
    			'disabled'	=>	$eq->disabledsearch
    			]);
    	}
    }
}
