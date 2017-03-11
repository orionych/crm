<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	$equipments=Equipment::with('equipment_names')->where('text','like','%'.$request->input('code').'%')->limit(50)->get();
    	return $equipments;
    }
}
