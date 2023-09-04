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
            'name' => 'required|max:255|unique:devices',
            'slug' => 'required|max:255|unique:devices'
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

        $fields = ['jam', 'menit'];
        $waktuMulai = array_combine($fields, explode(':', $request->waktuMulai));

        $fieldsDurasi = ['durasiMenit', 'durasiDetik'];
        $durasi = array_combine($fieldsDurasi, explode(':', $request->durasi));

        $model = Schedule::find($schedule_id);
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
        // $model->update($request->all());

        return redirect('/timer')->with('success', 'Setting has been updated !');
    }
}