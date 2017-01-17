<?php

use App\Request;
use Carbon\Carbon;
use App\OldRequest;
use Illuminate\Database\Seeder;

class OldRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$requests=OldRequest::all();
	DB::statement("SET FOREIGN_KEY_CHECKS=0");
	DB::table('requests')->truncate();
   	DB::statement("SET FOREIGN_KEY_CHECKS=1");
    	Eloquent::unguard(); 
    	foreach ($requests as $request)
    	{
    		
    	Request::create([
    		'id'	=>$request->id,
    		'request_type_id'	=>intval($request->typeid),
    		'client_id'	=> intval($request->clientid),
    		'text'		=> iconv("KOI8-R","UTF-8",$request->request),
    		'status'		=> $request->enabled,
    		'important'	=> $request->important,
    		'user_id'	=> $request->userid,
    		'call_at'	=> ((is_null($request->calltime)||($request->calltime==''))?null:Carbon::createFromTimestamp(strtotime($request->calltime)+$request->calltimeshift)),
    		'created_at'	=> Carbon::createFromTimestamp($request->time)
    		]);
    	}   
    }
}
