<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$cities=DB::connection('oldcrm')->table('crm_cityid')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('cities')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard();   
    	foreach ($cities as $city)
    	{
    		try {
    		City::create([
    			'id'		=> $city->id,
    			'name'		=> iconv('KOI8-R','UTF-8',$city->cityname),
    			'country_id'	=> 643,
    			'population'	=> $city->population,
    			'area'		=> $city->regiongeo,
    			'code'		=> str_pad($city->regioncode,2,'0',STR_PAD_LEFT)
    			]);
    	} catch (Exception $e)  { echo 'error '.$city->id;}
    	}
    }
}
