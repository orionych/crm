<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	$equipments=Equipment::where('code','like','%v2fs%');
    	return $equipments;
    }
}
