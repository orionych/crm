<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries=trim(File::get(base_path().'/database/seeds/countries.csv'));
        $arrays=explode("\n",$countries);
        foreach ($arrays as $key=>$value)
        {
        	if ($key==0) {continue;}
        	$data=explode(";",$value);
        	if (count($data)==0) {continue;}
        	$country=Country::create([
        		'id'=>intval(str_replace('"','',$data[1])),
        		'code2'=>$data[6],
        		'code3'=>$data[3],
        		'name'=>iconv('WINOWS-1251','UTF-8',$data[4])
        		]);

        }
    }
}
