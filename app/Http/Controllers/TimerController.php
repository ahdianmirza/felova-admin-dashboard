<?php

namespace App\Http\Controllers;

use App\Models\Timer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Timer $timer)
    {
        return view('timer.index', [
            'title' => 'Timer',
            'timers' => $timer->orderBy('created_at', 'desc')->limit(7)->get()
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

        Timer::create($validatedData);
        return redirect('/timer')->with('success', 'New setting has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timer $timer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timer $timer)
    {
        return view('timer.edit', [
            'title' => 'Update Setting',
            'setting_time' => $timer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timer $timer)
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

        Timer::where('id', $timer->id)
                ->update($validatedData);
        return redirect('/timer')->with('success', 'New setting has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timer $timer)
    {
        Timer::destroy($timer->id);

        return redirect('/timer')->with('success', 'Setting has been deleted!');
    }
}