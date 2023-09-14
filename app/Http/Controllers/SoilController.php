<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoilController extends Controller
{
    public function index() {
        return view('soil', [
            'title' => 'Soil'
        ]);
    }
}