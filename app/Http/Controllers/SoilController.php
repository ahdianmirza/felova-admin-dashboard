<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataSoilCollection;
use App\Models\DataSoil;
use App\Models\SoilAction;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SoilController extends Controller
{
    public function index() {
        $dataSoil = new DataSoilCollection(DataSoil::filter(request(['search', 'sort']))->paginate(5)->withQueryString());
        return Inertia::render('Soil/index', [
            'title' => 'Soil',
            'dataSoil' => $dataSoil,
            'dataSoilAll' => DataSoil::all()
        ]);
    }

    public function action(Request $request) {
        $sensor1 = $request->sensor1;
        $sensor2 = $request->sensor2;

        $sensor1 ?? "off";
        $sensor2 ?? "off"; 

        $soilAction = SoilAction::find(1)->update([
            'sensor1' => $sensor1,
            'sensor2' => $sensor2,
        ]);
        return redirect()->back()->with('success', 'Sensor berhasil diaktifkan');
    }
}