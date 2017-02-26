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
    }
}
