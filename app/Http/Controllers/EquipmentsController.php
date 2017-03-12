<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	$code=$request->input('code');
    	$equipments=Equipment::whereHas(['equipment_names'=>function ($query) use ($code) {
    		return $query->where('name','like','%ES2190600%');    		
    	}])->limit(50)->get();
    	return $equipments;
    }
}
