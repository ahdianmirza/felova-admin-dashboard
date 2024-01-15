<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Models\Schedule;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataSoil;
use App\Models\Pesan;
use App\Models\SoilAction;
use App\Models\Weather;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

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
        $device = $request->device;
        $device_data = Device::firstWhere('name', $device);

        $device = Schedule::firstWhere('device_id', $device_data->id);
        $device->device_id = $device->id;
        $device->noJadwal = $request->noJadwal;
        $device->hari = $request->hari;
        $device->sol_1 = $request->sol_1;
        $device->sol_2 = $request->sol_2;
        $device->sol_3 = $request->sol_3;
        $device->sol_4 = $request->sol_4;
        $device->jam = $request->jam;
        $device->menit = $request->menit;
        $device->detik = 0;
        $device->durasiMenit = $request->durasiMenit;
        $device->durasiDetik = $request->durasiDetik;
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

    public function listTimer(Request $request) {
        $device = $request->device;
        $noJadwal = $request->noJadwal;
        $device_data = Device::firstWhere('name', $device);

        $data = Schedule::where([
            'device_id' => $device_data->id,
            'noJadwal' => $noJadwal
        ])->get();

        $data_responses = response()->json($data);
        
        return $data_responses;
    }

    public function dataSoil(Request $request) {
        $storeDataSoil = DataSoil::create($request->all());
        return response()->json($storeDataSoil);
    }

    public function indexDataSoil() {
        return DataSoil::all();
    }

    public function indexActionSoil() {
        return SoilAction::all();
    }

    public function dataWeather(Request $request) {
        $dataWeather = $request->all();
        Weather::create($dataWeather);
    }

    public function pesan(Request $request) {
        Pesan::create($request->all());
    }

    public function data() {
        $dataManual = Manual::all();
        return response()->json($dataManual);
    }
}