<?php

use Illuminate\Database\Seeder;

class FirmDetailsSeeder extends Seeder
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
    			'firm_type_id'	=>0,
    			'name'	=>'ИНН',
    			]);
	$o=FirmDetail::create([
    			'id'		=>2,
    			'name'	=>'Индивидуальный предприниматель',
    			]);
	$o=FirmDetail::create([
    			'id'		=>3,
    			'name'	=>'Физическое лицо',
    			]);
    }
}
