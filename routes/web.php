<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManualController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/graphics', function () {
    return view('graphics', [
        'title' => 'Graphics'
    ]);
});

Route::resource('/manual', ManualController::class);
Route::resource('/timer', ScheduleController::class);
Route::get('/create-device', [DeviceScheduleController::class, 'createDevice']);
Route::post('/create-device/device', [DeviceScheduleController::class, 'storeDevice']);
Route::get('/update-timer/{device_id}/{schedule_id}', [DeviceScheduleController::class, 'editSchedule']);
Route::post('/update-timer/{device_id}/{schedule_id}/edit', [DeviceScheduleController::class, 'updateSchedule']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// Route::delete('/timer/{id}/{device_id}/schedule', [ScheduleController::class, 'destroySchedule']);