<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DeviceScheduleController extends Controller
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

    public function editSchedule($device_id, $schedule_id) {
        return view('timer.edit', [
            'title' => 'Edit Setting',
            'schedule' => Schedule::find($schedule_id),
            'devices' => Device::all(),
            'device' => Device::find($device_id),
            'device_id' => $device_id
        ]);
    }

    public function updateSchedule(Request $request, $device_id, $schedule_id) {
        $model = Schedule::find($schedule_id);
        $model->update($request->all());

        return redirect('/timer')->with('success', 'Setting has been updated !');
    }
}