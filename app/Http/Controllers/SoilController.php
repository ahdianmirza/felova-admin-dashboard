<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataSoilCollection;
use App\Models\DataSoil;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SoilController extends Controller
{
    public function index() {
        $dataSoil = new DataSoilCollection(DataSoil::filter(request(['search', 'sort']))->paginate(25)->withQueryString());
        return Inertia::render('Soil/index', [
            'title' => 'Soil',
            'dataSoil' => $dataSoil
        ]);
    }
}