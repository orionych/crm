<?php

use Illuminate\Database\Seeder;

class SecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents=File::get(base_path().'/database/seeds/okved2.csv');
        
    }
}
