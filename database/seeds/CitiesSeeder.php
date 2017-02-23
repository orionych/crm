<?php

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
    }
}
