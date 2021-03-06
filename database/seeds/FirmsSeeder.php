<?php

use App\Firm;
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
        	$firms=DB::connection('oldcrm')->table('crm_firms')->get();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('firms')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard();   
    	foreach ($firms as $firm)
    	{
            try {
    		Firm::create([
    			'id'		=>$firm->id,
    			'name'		=> iconv("KOI8-R","UTF-8",$firm->name),
    			'fullname'	=> iconv("KOI8-R","UTF-8",$firm->fullname),
    			'okved_id'	=> substr(iconv("KOI8-R","UTF-8//IGNORE",$firm->okved),0,9),
    			'power'		=> iconv("KOI8-R","UTF-8",$firm->power),
    			'stars'		=> iconv("KOI8-R","UTF-8",$firm->stars),
    			'fizlico'		=> iconv("KOI8-R","UTF-8",$firm->fizlico),
    			'city_id'	=> intval($firm->cityid),
    			'holding_id'	=> iconv("KOI8-R","UTF-8",$firm->holdingid),
    			'inn'	=> iconv("KOI8-R","UTF-8",$firm->inn),
    			'kpp'	=> iconv("KOI8-R","UTF-8",$firm->kpp),
    			'ogrn'	=> iconv("KOI8-R","UTF-8",$firm->ogrn),
    			'telephone'	=> iconv("KOI8-R","UTF-8",$firm->tel),
    			'uraddress'	=> iconv("KOI8-R","UTF-8",$firm->uraddress),
    			'faktaddress'	=> iconv("KOI8-R","UTF-8",$firm->faktaddress),
    			'director'	=> iconv("KOI8-R","UTF-8",$firm->directori),
    			'director-r'	=> iconv("KOI8-R","UTF-8",$firm->director),
    			'director-position'	=> iconv("KOI8-R","UTF-8",$firm->directordolg),
    			'osnovanie'	=> iconv("KOI8-R","UTF-8",$firm->osnovanie),
    			'bik'		=> iconv("KOI8-R","UTF-8",$firm->bik),
    			'rasschet'	=> iconv("KOI8-R","UTF-8",$firm->rasschet),
    			'korschet'	=> iconv("KOI8-R","UTF-8",$firm->korschet),
    			'bank'		=> iconv("KOI8-R","UTF-8",$firm->bankname),
    			'geox'		=> iconv("KOI8-R","UTF-8",$firm->geox),
    			'geoy'		=> iconv("KOI8-R","UTF-8",$firm->geoy),
    			'closed'	=> iconv("KOI8-R","UTF-8",$firm->firmclosed),
    			'note'	=> iconv("KOI8-R","UTF-8//IGNORE",$firm->firmnote)
    			]);
        } catch (Exception $e) {Firm::create([
                'id'        =>$firm->id,
                'name'      => iconv("KOI8-R","UTF-8",$firm->name),
                'fullname'  => iconv("KOI8-R","UTF-8",$firm->fullname),
                'okved_id'  => '',
                'power'     => iconv("KOI8-R","UTF-8",$firm->power),
                'stars'     => iconv("KOI8-R","UTF-8",$firm->stars),
                'fizlico'       => iconv("KOI8-R","UTF-8",$firm->fizlico),
                'city_id'   => intval($firm->cityid),
                'holding_id'    => iconv("KOI8-R","UTF-8",$firm->holdingid),
                'inn'   => iconv("KOI8-R","UTF-8",$firm->inn),
                'kpp'   => iconv("KOI8-R","UTF-8",$firm->kpp),
                'ogrn'  => iconv("KOI8-R","UTF-8",$firm->ogrn),
                'telephone' => iconv("KOI8-R","UTF-8",$firm->tel),
                'uraddress' => iconv("KOI8-R","UTF-8",$firm->uraddress),
                'faktaddress'   => iconv("KOI8-R","UTF-8",$firm->faktaddress),
                'director'  => iconv("KOI8-R","UTF-8",$firm->directori),
                'director-r'    => iconv("KOI8-R","UTF-8",$firm->director),
                'director-position' => iconv("KOI8-R","UTF-8",$firm->directordolg),
                'osnovanie' => iconv("KOI8-R","UTF-8",$firm->osnovanie),
                'bik'       => iconv("KOI8-R","UTF-8",$firm->bik),
                'rasschet'  => iconv("KOI8-R","UTF-8",$firm->rasschet),
                'korschet'  => iconv("KOI8-R","UTF-8",$firm->korschet),
                'bank'      => iconv("KOI8-R","UTF-8",$firm->bankname),
                'geox'      => iconv("KOI8-R","UTF-8",$firm->geox),
                'geoy'      => iconv("KOI8-R","UTF-8",$firm->geoy),
                'closed'    => iconv("KOI8-R","UTF-8",$firm->firmclosed),
                'note'  => iconv("KOI8-R","UTF-8//IGNORE",$firm->firmnote)
                ]);}
    	}

    }
}
