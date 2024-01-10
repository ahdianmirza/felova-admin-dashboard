<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\WeatherCollection;
use App\Models\Weather;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WeatherController extends Controller
{
    public function index() {
        $dataWeather = new WeatherCollection(Weather::filter(request(['search', 'sort', 'probabilitas']))->paginate(25)->withQueryString());
        return Inertia::render('Weather/index', [
            'title' => 'Weather',
            'dataWeather' => $dataWeather
        ]);
    }
}