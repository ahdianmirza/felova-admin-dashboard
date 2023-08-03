<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function list() {
        $data_post = request()->all();
        $data = Manual::firstWhere('slug', $data_post['device']);
        return $data;
    }

    public function getData() {
        return Manual::all();
    }
}