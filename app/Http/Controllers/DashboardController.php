<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'manuals' => Manual::orderBy('created_at', 'desc')->limit(5)->get(),
            'manuals_all' => Manual::all()
        ]);
    }

    public function admin() {
        echo "Halaman admin";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logoutsession'>Logout >></a>";
    }

    public function public() {
        echo "Halaman public";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logoutsession'>Logout >></a>";
    }
}