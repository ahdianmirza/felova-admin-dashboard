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
    // Route::get('/', [DashboardController::class, 'index']);
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->middleware('userAkses:admin');
    Route::get('/dashboard', [DashboardController::class, 'publicDashboard'])->middleware('userAkses:public');

    Route::resource('/admin/manual', ManualController::class)->middleware('userAkses:admin');
    Route::get('/manual', [ManualController::class, 'indexPublic'])->middleware('userAkses:public');

    Route::resource('/admin/timer', ScheduleController::class)->middleware('userAkses:admin');
    Route::get('/admin/timer/create/create-device', [DeviceScheduleController::class, 'createDevice'])->middleware('userAkses:admin');
    Route::post('/admin/timer/create/create-device', [DeviceScheduleController::class, 'storeDevice'])->middleware('userAkses:admin');
    Route::get('/admin/timer/edit/{device_id}/{schedule_id}', [DeviceScheduleController::class, 'editSchedule'])->middleware('userAkses:admin');
    Route::post('/admin/timer/edit/{device_id}/{schedule_id}', [DeviceScheduleController::class, 'updateSchedule'])->middleware('userAkses:admin');
    Route::get('/timer', [ScheduleController::class, 'indexPublic'])->middleware('userAkses:public');
    
    Route::get('/soil', [SoilController::class, 'index']);
    Route::get('/weather', [WeatherController::class, 'index']);

    Route::get('/data-manual', [ManualDataController::class, 'index']);

    Route::get('/graphics', function () {
        return view('graphics', [
            'title' => 'Graphics'
        ]);
    });

    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::delete('/timer/{id}/{device_id}/schedule', [ScheduleController::class, 'destroySchedule']);