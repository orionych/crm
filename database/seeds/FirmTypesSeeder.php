<?php

use App\FirmType;
use Illuminate\Database\Seeder;

class FirmTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$o=FirmType::create([
    			'id'		=>$offer->id,
    			'name'	=>'Юридическое лицо',
    			]);
	$o=FirmType::create([
    			'id'		=>$offer->id,
    			'name'	=>'Индивидуальный предприниматель',
    			]);
    }
}
