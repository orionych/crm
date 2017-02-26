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
	$o=FirmDetail::create([
    			'id'		=>1,
    			'name'	=>'Юридическое лицо',
    			]);
	$o=FirmDetail::create([
    			'id'		=>2,
    			'name'	=>'Индивидуальный предприниматель',
    			]);
	$o=FirmDetail::create([
    			'id'		=>2,
    			'name'	=>'Физическое лицо',
    			]);
    }
}
