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
    			'id'		=>1,
    			'name'	=>'Юридическое лицо',
    			]);
	$o=FirmType::create([
    			'id'		=>2,
    			'name'	=>'Индивидуальный предприниматель',
    			]);
	$o=FirmType::create([
    			'id'		=>3,
    			'name'	=>'Физическое лицо',
    			]);
    }
}
