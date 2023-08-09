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
    public function index()
    {
        return view('timer.index', [
            'title' => 'Timer',
            // 'manuals' => Manual::all()
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
        $validatedData = $request->validate([
            'device' => 'required|max:255',
            'slug' => 'required|max:255',
            'jam' => 'required|numeric|between:0,24',
            'menit' => 'required|numeric|between:0,60',
            'detik' => 'required|numeric|between:0,60',
            'durasi' => 'required|numeric|between:1,60'
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timer $timer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timer $timer)
    {
        //
    }
}