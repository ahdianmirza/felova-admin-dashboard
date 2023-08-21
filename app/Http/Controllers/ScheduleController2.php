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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('timer.create', [
            'title' => 'Create New Setting'
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

        $validatedData = $request->validate([
            'device' => 'required|max:255',
            'slug' => 'required|max:255'
        ]);

        $validatedData2 = $request->validate([
            'hari' => 'required|max:255',
            'noJadwal' => 'required|numeric',
            'sol_1' => 'nullable',
            'sol_2' => 'nullable',
            'sol_3' => 'nullable',
            'sol_4' => 'nullable',
            'jam' => 'required|numeric|between:0,24',
            'menit' => 'required|numeric|between:0,60',
            'detik' => 'required|numeric|between:0,60',
            'durasi' => 'required|numeric|between:1,60',
            'status' => 'nullable'
        ]);

        Device::create($validatedData);
        Schedule::create($validatedData2);
        return redirect('/timer')->with('success', 'New setting has been added!');
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
    public function edit(Schedule $schedule)
    {
        return view('timer.edit', [
            'title' => 'Update Setting',
            'setting_timer' => $schedule
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule, Device $device)
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

        $validatedData = $request->validate([
            'device' => 'required|max:255',
            'slug' => 'required|max:255'
        ]);

        $validatedData2 = $request->validate([
            'device' => 'required|max:255',
            'slug' => 'required|max:255',
            'hari' => 'required|max:255',
            'noJadwal' => 'required|numeric',
            'sol_1' => 'nullable',
            'sol_2' => 'nullable',
            'sol_3' => 'nullable',
            'sol_4' => 'nullable',
            'jam' => 'required|numeric|between:0,24',
            'menit' => 'required|numeric|between:0,60',
            'detik' => 'required|numeric|between:0,60',
            'durasi' => 'required|numeric|between:1,60',
            'status' => 'nullable'
        ]);

        Device::where('id', $device->id)
                ->update($validatedData);

        Schedule::where('id', $schedule->id)
                ->update($validatedData2);
        return redirect('/timer')->with('success', 'New setting has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        // dd(Schedule::where('id', $schedule->id));

        Schedule::destroy($schedule->id);
        return redirect('/timer')->with('success', 'Setting has been deleted!');
    }
}