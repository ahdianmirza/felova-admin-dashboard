<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceScheduleController;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/graphics', function () {
    return view('graphics', [
        'title' => 'Graphics'
    ]);
})->middleware('auth');

Route::resource('/manual', ManualController::class)->middleware('auth');
Route::resource('/timer', ScheduleController::class)->middleware('auth');
Route::get('/create-device', [DeviceScheduleController::class, 'createDevice'])->middleware('auth');
Route::post('/create-device/device', [DeviceScheduleController::class, 'storeDevice'])->middleware('auth');
Route::get('/update-timer/{device_id}/{schedule_id}', [DeviceScheduleController::class, 'editSchedule'])->middleware('auth');
Route::post('/update-timer/{device_id}/{schedule_id}/edit', [DeviceScheduleController::class, 'updateSchedule'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/soil', [SoilController::class, 'index'])->middleware('auth');
Route::get('/weather', [WeatherController::class, 'index'])->middleware('auth');
// Route::delete('/timer/{id}/{device_id}/schedule', [ScheduleController::class, 'destroySchedule']);