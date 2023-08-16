<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Models\Timer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function listManual() {
        $data_post = request()->all();
        $data = Manual::firstWhere('slug', $data_post['device']);

        // return response()->json(Manual::all());
        return response()->json($data);
    }

    public function updateManual(Request $request) {
        $device = Manual::firstWhere('device', $request->device);
        $device->device = $request->device;
        $device->slug = $request->slug;
        $device->pompa = $request->pompa;
        $device->sol_1 = $request->sol_1;
        $device->sol_2 = $request->sol_2;
        $device->sol_3 = $request->sol_3;
        $device->sol_4 = $request->sol_4;
        $result = $device->save();

        if($result) {
            return ["result" => "Data has been updated"];
        } else {
            return ["result" => "Update operastion has been failed"];
        }
    }

    public function updateTimer(Request $request) {
        $device = Timer::firstWhere('device', $request->device);
        $device->device = $request->device;
        $device->slug = $request->slug;
        $device->hari = $request->hari;
        $device->noJadwal = $request->noJadwal;
        $device->sol_1 = $request->sol_1;
        $device->sol_2 = $request->sol_2;
        $device->sol_3 = $request->sol_3;
        $device->sol_4 = $request->sol_4;
        $device->jam = $request->jam;
        $device->menit = $request->menit;
        $device->detik = $request->detik;
        $device->durasi = $request->durasi;
        $device->status = $request->status;
        
        $result = $device->save();

        if($result) {
            return ["result" => "Data has been updated"];
        } else {
            return ["result" => "Update operastion has been failed"];
        }
    }

    public function getDataManual() {
        return Manual::latest()->get();
    }

    public function listTimer() {
        $data_post = request()->all();
        $data = Timer::firstWhere('device', $data_post['device']);
        return response()->json($data);
    }
}