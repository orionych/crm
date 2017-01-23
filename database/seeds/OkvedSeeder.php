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
            $okveds=explode('.',$sector[0]);
            $okveds[]=0;
            $okveds[]=0;
            if (intval($okveds[0])==0) {continue;}
            Okved::firstOrCreate([
            'id'=>$sector[0],
        	'sector'=>intval($okveds[0]),
            'subsector'=>intval($okveds[1]),
            'suffix'=>intval($okveds[2]),
        	'name'=>str_replace('"','',$sector[1])
        	]);
    	}
    }
}
