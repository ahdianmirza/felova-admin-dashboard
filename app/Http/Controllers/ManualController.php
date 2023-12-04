<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manual;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ManualController extends Controller
{
    public function index() {
        return Inertia::render('Manual/index', [
            'title' => 'Manual',
            'dataManual' => Manual::all()
        ]);
    }

    public function store(Request $request) {
        $pompa = $request->pompa;
        $sol_1 = $request->sol_1;
        $sol_2 = $request->sol_2;
        $sol_3 = $request->sol_3;
        $sol_4 = $request->sol_4;

        $pompa ? $pompa = 1 : $pompa = 0;
        $sol_1 ? $sol_1 = 1 : $sol_1 = 0;
        $sol_2 ? $sol_2 = 1 : $sol_2 = 0;
        $sol_3 ? $sol_3 = 1 : $sol_3 = 0;
        $sol_4 ? $sol_4 = 1 : $sol_4 = 0;
        
        $manual = new Manual();
        $manual->device = $request->device;
        $manual->slug = strtolower($request->device);
        $manual->pompa = $pompa;
        $manual->sol_1 = $sol_1;
        $manual->sol_2 = $sol_2;
        $manual->sol_3 = $sol_3;
        $manual->sol_4 = $sol_4;
        $manual->save();
        return redirect()->back()->with('message', 'Pengaturan berhasil ditambahkan');
    }
}