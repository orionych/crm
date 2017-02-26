<?php

use App\Country;
use App\FirmDetail;
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
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
  	DB::table('firm_details')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard(); 
  	$country=Country::find(643);
	$o=FirmDetail::create([
    			'id'		=>1,
    			'name'	=>'ИНН'
    			]);
	$o->countries()->save($country);
	$o=FirmDetail::create([
    			'id'		=>2,
    			'name'	=>'КПП'
    			]);
	$o->countries()->save($country);
	$o=FirmDetail::create([
    			'id'		=>3,
    			'name'	=>'ОГРН'
    			]);
	$o->countries()->save($country);
	$o=FirmDetail::create([
    			'id'		=>4,
    			'name'	=>'Юридический адрес'
    			]);
	$o->countries()->save($country);
	$o=FirmDetail::create([
    			'id'		=>5,
    			'name'	=>'Фактический адрес'
    			]);
	$o->countries()->save($country);
	$o=FirmDetail::create([
    			'id'		=>6,
    			'name'	=>'Почтовый адрес'
    			]);
	$o->countries()->save($country);
    }
}
