<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataSoil;
use Illuminate\Http\Request;

class SoilController extends Controller
{
    public function index() {
        return view('soil', [
            'title' => 'Soil',
            'soilDatas' => DataSoil::orderBy('created_at', 'asc')->paginate(10),
            'allSoilDatas' => DataSoil::all()
        ]);
    }
}