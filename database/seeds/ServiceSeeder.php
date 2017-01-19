<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	print_r($_SERVER);
        $contents=File::get(base_path().'/database/seeds/okved2.csv');
        print_r($contents);
    }
}
