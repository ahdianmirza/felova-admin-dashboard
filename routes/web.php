<?php

use App\Models\Manual;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\DeviceScheduleController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ScheduleController;
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
Route::resource('/timer', ScheduleController::class);
Route::get('/create-device', [DeviceScheduleController::class, 'createDevice']);
Route::post('/create-device/device', [DeviceScheduleController::class, 'storeDevice']);
Route::get('/update-timer/{device_id}/{schedule_id}', [DeviceScheduleController::class, 'editSchedule']);
Route::post('/update-timer/{device_id}/{schedule_id}/edit', [DeviceScheduleController::class, 'updateSchedule']);
// Route::delete('/timer/{id}/{device_id}/schedule', [ScheduleController::class, 'destroySchedule']);