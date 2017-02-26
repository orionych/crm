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
    			'name'	=>'ИНН'
    			]);
	$o=FirmDetail::create([
    			'id'		=>2,
    			'firm_type_id'	=>1,
    			'name'	=>'КПП'
    			]);
	$o=FirmDetail::create([
    			'id'		=>3,
    			'firm_type_id'	=>1,
    			'name'	=>'ОГРН'
    			]);
	$o=FirmDetail::create([
    			'id'		=>4,
    			'firm_type_id'	=>1,
    			'name'	=>'Юридический адрес'
    			]);
	$o=FirmDetail::create([
    			'id'		=>5,
    			'firm_type_id'	=>1,
    			'name'	=>'Фактический адрес'
    			]);
	$o=FirmDetail::create([
    			'id'		=>6,
    			'firm_type_id'	=>1,
    			'name'	=>'Почтовый адрес'
    			]);
    }
}
