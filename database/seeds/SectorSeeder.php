<?php

use App\Okved;
use Illuminate\Database\Seeder;

class OkvedSeeder extends Seeder
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
        Okved::create([
        	'id'=>$sector[0],
        	'name'=>str_replace('"','',$sector[1])
        	]);
    	}
    }
}
