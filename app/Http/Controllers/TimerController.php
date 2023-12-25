<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimerController extends Controller
{
    public function index() {
        return Inertia::render('Timer/index', [
            'title' => 'Timer',
            'dataTimer' => Schedule::all()
        ]);
    }

    public function destroy(Request $request) {
        $schedule = Schedule::find($request->id);
        $schedule->delete();
        return redirect('/timer')->with('success', 'Pengaturan berhasil dihapus');
    }
}