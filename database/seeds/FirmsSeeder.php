<?php

use App\Firm;
use App\OldFirms;
use Illuminate\Database\Seeder;

class FirmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$firms=OldFirms::all();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('firms')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard();
    	foreach ($firms as $firm)
    	{
    		Firm::create([
    			''




    			])	


    	}

    }
}
