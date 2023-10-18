<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManualDataController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/dashboard', [DashboardController::class, 'public'])->middleware('userAkses:public');

    Route::resource('/manual', ManualController::class);
    Route::resource('/timer', ScheduleController::class);
    Route::get('/create-device', [DeviceScheduleController::class, 'createDevice']);
    Route::post('/create-device/device', [DeviceScheduleController::class, 'storeDevice']);
    Route::get('/update-timer/{device_id}/{schedule_id}', [DeviceScheduleController::class, 'editSchedule']);
    Route::post('/update-timer/{device_id}/{schedule_id}/edit', [DeviceScheduleController::class, 'updateSchedule']);

    Route::get('/soil', [SoilController::class, 'index']);
    Route::get('/weather', [WeatherController::class, 'index']);

    Route::get('/data-manual', [ManualDataController::class, 'index']);

    Route::get('/graphics', function () {
        return view('graphics', [
            'title' => 'Graphics'
        ]);
    });

    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/logoutsession', [LoginController::class, 'logoutSession']);
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::delete('/timer/{id}/{device_id}/schedule', [ScheduleController::class, 'destroySchedule']);