<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manual.index', [
            'title' => 'Manual',
            'manuals' => Manual::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manual.create', [
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
            'pompa' => 'required',
            'sol_1' => 'required',
            'sol_2' => 'required',
            'sol_3' => 'required',
            'sol_4' => 'required',
        ]);

        Manual::create($validatedData);

        return redirect('/manual')->with('success', 'New setting has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manual $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manual $manual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manual $manual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manual $manual)
    {
        //
    }
}