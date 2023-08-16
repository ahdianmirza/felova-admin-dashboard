<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'manuals' => Manual::orderBy('created_at', 'desc')->limit(5)->get(),
            'manuals_all' => Manual::all()
        ]);
    }

    public function indexCoba() {
        return view('dashboard-coba', [
            'title' => 'Dashboard',
            'manuals' => Manual::orderBy('created_at', 'desc')->limit(5)->get(),
            'manuals_all' => Manual::all()
        ]);
    }
}