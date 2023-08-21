<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function createDevice()
    {
        // return 'Halaman create device';
        
        return view('timer.createDevice', [
            'title' => 'Create New Device',
            'devices' => Device::all()
        ]);
    }

    public function storeDevice(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255'
        ]);

        Device::create($validatedData);

        return redirect('/timer/create')->with('success', 'New device has been added!');
    }
}