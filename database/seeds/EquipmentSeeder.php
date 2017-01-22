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
	$equipments=DB::connection('oldcrm')->table('crm_price')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('equipments')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");   	
    	Eloquent::unguard(); 
    	foreach ($equipments as $eq)
    	{
    		$eq=
    	}
    }
}
