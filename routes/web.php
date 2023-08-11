<?php

use App\Models\Manual;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/graphics', function () {
    return view('graphics', [
        'title' => 'Graphics'
    ]);
});

Route::resource('/manual', ManualController::class);
Route::resource('/timer', TimerController::class);