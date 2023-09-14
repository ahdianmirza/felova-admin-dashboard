<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualDataController extends Controller
{
    public function index() {
        return view('logdata.manual', [
            'title' => 'Log Data Manual'
        ]);
    }
}