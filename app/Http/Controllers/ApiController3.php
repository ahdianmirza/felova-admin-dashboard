<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Manual $manual)
    {
        return Manual::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Manual $manual)
    {
        $data_post = request()->all();
        $data = Manual::firstWhere('slug', $data_post['device']);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manual $manual, Request $request)
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

        Manual::where('slug', $manual->slug)
                ->update($validatedData);
        
        return Manual::all();
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