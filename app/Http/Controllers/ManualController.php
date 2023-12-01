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
}