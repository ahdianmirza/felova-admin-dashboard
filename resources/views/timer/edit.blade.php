@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px] text-[#353535]">Edit Timer Setting
                    </h1>

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md mt-4">
                        <div class="mt-5">
                            <form action="/timer/{{ $setting_time->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="mb-4">
                                    <label for="device" class="text-[#353535] font-semibold">Device</label>
                                    <input type="text" placeholder="Type device name" name="device" id="device"
                                        oninput="myFunction3()" value="{{ old('device', $setting_time->device) }}" autofocus
                                        required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    <input type="hidden" name="slug" id="slug"
                                        value="{{ old('slug', $setting_time->slug) }}" class="border">
                                    @error('device')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="hari" class="text-[#353535] font-semibold">Hari</label>
                                    <select name="hari" id="hari"
                                        class="select select-bordered bg-white text-[#353535] w-full max-w-xs block mt-1"
                                        id="hariSelect">
                                        <option disabled selected>Select the day</option>
                                        <option value="Senin" id="senin"
                                            {{ $setting_time->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                        <option value="Selasa" id="selasa"
                                            {{ $setting_time->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                        <option value="Rabu" id="rabu"
                                            {{ $setting_time->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                        <option value="Kamis" id="kamis"
                                            {{ $setting_time->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                        <option value="Jumat" id="jumat"
                                            {{ $setting_time->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                        <option value="Sabtu" id="sabtu"
                                            {{ $setting_time->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                        <option value="Minggu" id="minggu"
                                            {{ $setting_time->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                    </select>
                                    @error('hari')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="noJadwal" class="text-[#353535] font-semibold">No. Jadwal</label>
                                    <select name="noJadwal" id="noJadwal"
                                        class="select select-bordered bg-white text-[#353535] w-full max-w-xs block mt-1">
                                        <option disabled selected>Select the number of schedule</option>
                                        <option value="1" {{ $setting_time->noJadwal == '1' ? 'selected' : '' }}>1
                                        </option>
                                        <option value="2" {{ $setting_time->noJadwal == '2' ? 'selected' : '' }}>2
                                        </option>
                                        <option value="3" {{ $setting_time->noJadwal == '3' ? 'selected' : '' }}>3
                                        </option>
                                        <option value="4" {{ $setting_time->noJadwal == '4' ? 'selected' : '' }}>4
                                        </option>
                                        <option value="5" {{ $setting_time->noJadwal == '5' ? 'selected' : '' }}>5
                                        </option>
                                        <option value="6" {{ $setting_time->noJadwal == '6' ? 'selected' : '' }}>6
                                        </option>
                                        <option value="7" {{ $setting_time->noJadwal == '7' ? 'selected' : '' }}>7
                                        </option>
                                    </select>
                                    @error('noJadwal')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex mb-4">
                                    <div class="flex flex-col justify-center">
                                        <label for="checkSolTimUp1" class="text-[#353535] font-semibold">Solenoid 1</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTimUp1" class="toggle toggle-success"
                                                onclick="checkClick3()" {{ $setting_time->sol_1 == 1 ? 'checked' : '' }}>
                                            <input type="hidden" name="sol_1" id="timSolUp1"
                                                value="{{ $setting_time->sol_1 }}">
                                        </label>
                                    </div>
                                    <div class="ml-6 flex flex-col justify-center">
                                        <label for="checkSolTimUp2" class="text-[#353535] font-semibold">Solenoid 2</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTimUp2" class="toggle toggle-success"
                                                onclick="checkClick3()" {{ $setting_time->sol_2 == 1 ? 'checked' : '' }} />
                                            <input type="hidden" name="sol_2" id="timSolUp2"
                                                value="{{ $setting_time->sol_2 }}">
                                        </label>
                                    </div>
                                    <div class="ml-6 flex flex-col justify-center">
                                        <label for="checkSolTimUp3" class="text-[#353535] font-semibold">Solenoid 3</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTimUp3" class="toggle toggle-success"
                                                onclick="checkClick3()" {{ $setting_time->sol_3 == 1 ? 'checked' : '' }} />
                                            <input type="hidden" name="sol_3"
                                                id="timSolUp3"value="{{ $setting_time->sol_3 }}">
                                        </label>
                                    </div>
                                    <div class="ml-6 flex flex-col justify-center">
                                        <label for="checkSolTimUp4" class="text-[#353535] font-semibold">Solenoid 4</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTimUp4" class="toggle toggle-success"
                                                onclick="checkClick3()"
                                                {{ $setting_time->sol_4 == 1 ? 'checked' : '' }} />
                                            <input type="hidden" name="sol_4" id="timSolUp4"
                                                value="{{ $setting_time->sol_4 }}">
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="jam" class="text-[#353535] font-semibold">Jam</label>
                                    <input type="number" placeholder="Type jam" name="jam" id="jam"
                                        value="{{ old('jam', $setting_time->jam) }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('jam')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="menit" class="text-[#353535] font-semibold">Menit</label>
                                    <input type="number" placeholder="Type menit" name="menit" id="menit"
                                        value="{{ old('menit', $setting_time->menit) }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('menit')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="detik" class="text-[#353535] font-semibold">Detik</label>
                                    <input type="number" placeholder="Type detik" name="detik" id="detik"
                                        value="{{ old('detik', $setting_time->detik) }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('detik')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="durasi" class="text-[#353535] font-semibold">Durasi</label>
                                    <input type="number" placeholder="Type durasi" name="durasi" id="durasi"
                                        value="{{ old('durasi', $setting_time->durasi) }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('durasi')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex flex-col justify-center">
                                    <label for="status" class="text-[#353535] font-semibold">Status</label>
                                    <label class="mt-2">
                                        <input type="checkbox" id="checkStatusUp" onclick="checkClick3()"
                                            class="toggle toggle-success"
                                            {{ $setting_time->status == 1 ? 'checked' : '' }} />
                                        <input type="hidden" name="status" id="statusUp"
                                            value="{{ $setting_time->status }}">
                                    </label>
                                </div>

                                <button type="submit"
                                    class="btn btn-sm btn-primary border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4">Edit
                                    setting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction3() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>

    <script>
        function checkClick3() {
            let checkBoxTimUp = document.getElementById("checkSolTimUp1");
            let checkBoxTimUp2 = document.getElementById("checkSolTimUp2");
            let checkBoxTimUp3 = document.getElementById("checkSolTimUp3");
            let checkBoxTimUp4 = document.getElementById("checkSolTimUp4");
            let checkBoxStatusUp = document.getElementById("checkStatusUp");

            if (checkBoxTimUp.checked == true) {
                document.getElementById("timSolUp1").value = 1;
            } else {
                document.getElementById("timSolUp1").value = "0";
            }

            if (checkBoxTimUp2.checked == true) {
                document.getElementById("timSolUp2").value = 1;
            } else {
                document.getElementById("timSolUp2").value = "0";
            }

            if (checkBoxTimUp3.checked == true) {
                document.getElementById("timSolUp3").value = 1;
            } else {
                document.getElementById("timSolUp3").value = "0";
            }

            if (checkBoxTimUp4.checked == true) {
                document.getElementById("timSolUp4").value = 1;
            } else {
                document.getElementById("timSolUp4").value = "0";
            }

            if (checkBoxStatusUp.checked == true) {
                document.getElementById("statusUp").value = 1;
            } else {
                document.getElementById("statusUp").value = "0";
            }
        }
    </script>
@endsection
