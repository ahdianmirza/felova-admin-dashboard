<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manual', [
            'title' => 'Manual',
            'manual_data' => Manual::all()
        ]);
    }

    public function list() {
        return Manual::first();
    }
}