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
    return view('dashboard');
});

// Route::get('/graphics', function () {
//     return 'Graphics';
// });

// Route::get('/manual', function () {
//     return 'Manual';
// });

// Route::get('/timer', function () {
//     return 'Timer';
// });