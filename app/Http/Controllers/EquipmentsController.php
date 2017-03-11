<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	$equipments=Equipment::where('text','like','%v2fs%')->get();
    	return $equipments;
    }
}
