<?php

use App\Sector;
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
        foreach ($arrays as $array)
	{
        	$sector=explode(',',$array);
        Sector::create([
        	'id'=>$sector[0],
        	'name'=>$sector[1]
        	]);
    	}
    }
}
