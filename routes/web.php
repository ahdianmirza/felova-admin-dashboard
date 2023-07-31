<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/graphics', function () {
    return view('graphics', [
        'title' => 'Graphics'
    ]);
});

Route::get('/manual', function () {
    return view('manual', [
        'title' => 'Manual'
    ]);
});

Route::get('/timer', function () {
    return view('timer', [
        'title' => 'Timer'
    ]);
});