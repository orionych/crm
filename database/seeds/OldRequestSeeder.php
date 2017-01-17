<?php

use Illuminate\Database\Seeder;

class OldRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$clients=OldRequest::all();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('clients')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard();    
    }
}
