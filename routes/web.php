<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoilController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\WeatherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/device', DeviceController::class);
Route::resource('/manual', ManualController::class);

Route::get('/timer', [TimerController::class, 'index'])->name('index.timer');
Route::post('/timer/store', [TimerController::class, 'store'])->name('store.timer');
Route::post('/timer/delete', [TimerController::class, 'destroy'])->name('delete.timer');
Route::get('/timer/edit', [TimerController::class, 'edit'])->name('edit.timer');
Route::put('/timer/update', [TimerController::class, 'update'])->name('update.timer');

Route::get('/soil', [SoilController::class, 'index'])->name('index.soil');
Route::post('/soil', [SoilController::class, 'action'])->name('action.soil');

Route::get('/weather', [WeatherController::class, 'index'])->name('index.weather');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';