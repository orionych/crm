<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	$equipments=Equipment::with('equipment_names')->where('text','like','%v2fs%')->limit(50)->get();
    	return $equipments;
    }
}
