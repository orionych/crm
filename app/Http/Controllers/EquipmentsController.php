<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	$code=$request->input('code');
	$equipments=Equipment::with('equipment_names')->whereHas('equipment_names', function ($query) use ($code) {
    $query->where('name','like','%'.$code.'%');
})
// ..или оборудование без в которых может вообще не быть связей
->orWhere('text','like','%'.$code.'%')->limit(50)->toSql();
    	return $equipments;
    }
}
