<?php

use App\Country;
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

  	DB::table('firm_details')->truncate();
  	$country=Country::find(643);
	$o=FirmDetail::create([
    			'id'		=>1,
    			'name'	=>'ИНН'
    			]);
	$o->countries()->associate($country);
	$o=FirmDetail::create([
    			'id'		=>2,
    			'name'	=>'КПП'
    			]);
	$o->countries()->associate($country);
	$o=FirmDetail::create([
    			'id'		=>3,
    			'name'	=>'ОГРН'
    			]);
	$o->countries()->associate($country);
	$o=FirmDetail::create([
    			'id'		=>4,
    			'name'	=>'Юридический адрес'
    			]);
	$o->countries()->associate($country);
	$o=FirmDetail::create([
    			'id'		=>5,
    			'name'	=>'Фактический адрес'
    			]);
	$o->countries()->associate($country);
	$o=FirmDetail::create([
    			'id'		=>6,
    			'name'	=>'Почтовый адрес'
    			]);
	$o->countries()->associate($country);
    }
}
