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
     private function mb_ucfirst($string) {  
          $string = mb_ereg_replace("^[\ ]+","", $string);  
          $string = mb_strtoupper(mb_substr($string, 0, 1, "UTF-8"), "UTF-8").mb_substr($string, 1, mb_strlen($string), "UTF-8" );  
          return $string;  
     }  
    public function run()
    {
    	setlocale(LC_CTYPE, "ru_RU.UTF-8");
        $countries=trim(File::get(base_path().'/database/seeds/countries.csv'));
        $arrays=explode("\n",$countries);
        foreach ($arrays as $key=>$value)
        {
        	if ($key==0) {continue;}
        	$data=explode(";",$value);
        	if (count($data)==0) {continue;}
        	 try{
        	$country=Country::create([
        		'id'=>intval(str_replace('"','',$data[1])),
        		'code2'=>iconv('WINDOWS-1251','UTF-8',str_replace('"','',$data[6])),
        		'code3'=>iconv('WINDOWS-1251','UTF-8',str_replace('"','',$data[3])),
        		'name'=>ucfirst(mb_strtolower(iconv('WINDOWS-1251','UTF-8',str_replace('"','',$data[4]))))
        		]);
        	}   catch(PDOException $e)
        	  {
	        echo "error";                           // catch this error
	        }
        }
    }
}
