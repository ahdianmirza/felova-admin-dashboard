<?php

use App\Http\Controllers\ManualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimerController;
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

Route::resource('/manual', ManualController::class);

Route::get('/timer', [TimerController::class, 'index']);
Route::post('/timer/delete', [TimerController::class, 'destroy'])->name('delete.timer');
// Route::post('/manual/data', [ManualController::class, 'store'])->name('manual.data');
// Route::get('/manual/data', [ManualController::class, 'data'])->name('manual.data');
// Route::post('/manual/edit', [ManualController::class, 'update'])->name('manual.update');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';