<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(Request $request) {
    	// $request->all();
    	return array('code'=>'new1');
    }
}
