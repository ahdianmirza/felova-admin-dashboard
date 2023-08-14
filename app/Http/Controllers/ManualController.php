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
    public function index(Manual $manual)
    {
        return view('manual.index', [
            'title' => 'Manual',
            'manuals' => Manual::latest()->get()
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
        if ($request['pompa'] == null) {
            $request['pompa'] = 0;
        }

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
            'pompa' => 'nullable',
            'sol_1' => 'nullable',
            'sol_2' => 'nullable',
            'sol_3' => 'nullable',
            'sol_4' => 'nullable',
        ]);

        Manual::create($validatedData);

        return redirect('/manual')->with('success', 'New setting has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manual $manual)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manual $manual)
    {
        return view('manual.edit', [
            'title' => 'Update Setting',
            'setting' => $manual
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manual $manual)
    {
        if ($request['pompa'] == null) {
            $request['pompa'] = 0;
        }

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
            'pompa' => 'nullable',
            'sol_1' => 'nullable',
            'sol_2' => 'nullable',
            'sol_3' => 'nullable',
            'sol_4' => 'nullable',
        ]);

        Manual::where('id', $manual->id)
                ->update($validatedData);
        return redirect('/manual')->with('success', 'New setting has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manual $manual)
    {
        Manual::destroy($manual->id);

        return redirect('/manual')->with('success', 'Setting has been deleted!');
    }

    public function list() {
        // $filtered_manual = Manual::where('slug');
        
        return Manual::all();
    }
}