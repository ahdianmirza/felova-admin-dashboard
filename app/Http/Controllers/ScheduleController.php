<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('timer.index', [
            'title' => 'Timer',
            'schedules' => Schedule::all()
        ]);
    }

    public function indexPublic()
    {
        return view('timer.index', [
            'title' => 'Timer',
            'schedules' => Schedule::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('timer.create', [
            'title' => 'Create New Setting',
            'devices' => Device::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request['sol_1'] == null) {
            $request['sol_1'] = 0;
        }

        if ($request['sol_2'] == null) {
            $request['sol_2'] = 0;
        }

        if ($request['sol_3'] == null) {
            $request['sol_3'] = 0;
        }

        if ($request['sol_4'] == null) {
            $request['sol_4'] = 0;
        }

        if ($request['status'] == null) {
            $request['status'] = 0;
        }

        $request->validate([
            'device_id' => 'required',
            'hari' => 'required|max:255',
            'noJadwal' => 'required|numeric',
            'sol_1' => 'nullable',
            'sol_2' => 'nullable',
            'sol_3' => 'nullable',
            'sol_4' => 'nullable',
            'waktuMulai' => 'required',
            'durasi' => 'required',
            'status' => 'nullable'
        ]);

        $fieldsWaktuMulai = ['jam', 'menit'];
        $waktuMulai = array_combine($fieldsWaktuMulai, explode(':', $request->waktuMulai));

        $fieldsDurasi = ['durasiMenit', 'durasiDetik'];
        $durasi = array_combine($fieldsDurasi, explode(':', $request->durasi));

        $model = new Schedule;
        $model->device_id = $request->device_id;
        $model->hari = $request->hari;
        $model->noJadwal = $request->noJadwal;
        $model->sol_1 = $request->sol_1;
        $model->sol_2 = $request->sol_2;
        $model->sol_3 = $request->sol_3;
        $model->sol_4 = $request->sol_4;
        $model->jam = $waktuMulai['jam'];
        $model->menit = $waktuMulai['menit'];
        $model->detik = 0;
        $model->durasiMenit = $durasi['durasiMenit'];
        $model->durasiDetik = $durasi['durasiDetik'];
        $model->status = $request->status;
        $model->save();

        // Schedule::create($validatedData);
        return redirect('/admin/timer')->with('success', 'Pengaturan baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule, Device $device)
    {
        return view('timer.edit', [
            'title' => 'Edit Setting',
            'schedule' => $schedule,
            'device' => $device
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Schedule::destroy($id);
        return redirect('/admin/timer')->with('success', 'Setting has been deleted !');
    }

    // public function destroySchedule($id, $device_id)
    // {
    //     Schedule::destroy($schedule->id);
    //     $model = Schedule::find($id);
    //     $model->delete();
    //     return redirect('/timer')->with('success', 'Setting has been deleted !');
    // }
}