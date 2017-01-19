<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents=trim(File::get(base_path().'/database/seeds/okved2.csv'));
        $arrays=explode("\n",$contents);
        foreach ($arrays as $sector)
        Sector::create(['
        	
        	']);
    }
}
