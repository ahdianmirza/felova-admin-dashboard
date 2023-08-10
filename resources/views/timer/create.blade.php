@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px] text-[#353535]">Create New Timer
                        Setting
                    </h1>

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md mt-4">
                        <div class="mt-5">
                            <form action="/timer" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="device" class="text-[#353535] font-semibold">Device</label>
                                    <input type="text" placeholder="Type device name" name="device" id="device"
                                        oninput="myFunction2()" value="{{ old('device') }}" autofocus required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    <input type="hidden" name="slug" id="slug" value="" class="border">
                                    @error('device')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="hari" class="text-[#353535] font-semibold">Hari</label>
                                    <select name="hari" id="hari"
                                        class="select select-bordered bg-white text-[#353535] w-full max-w-xs block mt-1">
                                        <option disabled selected>Select the day</option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                        <option value="minggu">Minggu</option>
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
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                    @error('noJadwal')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex mb-4">
                                    <div class="flex flex-col justify-center">
                                        <label for="timerSol_1" class="text-[#353535] font-semibold">Solenoid 1</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTim1" onclick="checkTim()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_1" id="timerSol_1">
                                        </label>
                                    </div>
                                    <div class="ml-6 flex flex-col justify-center">
                                        <label for="timerSol_2" class="text-[#353535] font-semibold">Solenoid 2</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTim2" onclick="checkTim()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_2" id="timerSol_2">
                                        </label>
                                    </div>
                                    <div class="ml-6 flex flex-col justify-center">
                                        <label for="timerSol_3" class="text-[#353535] font-semibold">Solenoid 3</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTim3" onclick="checkTim()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_3" id="timerSol_3">
                                        </label>
                                    </div>
                                    <div class="ml-6 flex flex-col justify-center">
                                        <label for="timerSol_4" class="text-[#353535] font-semibold">Solenoid 4</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSolTim4" onclick="checkTim()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_4" id="timerSol_4">
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="jam" class="text-[#353535] font-semibold">Jam</label>
                                    <input type="number" placeholder="Type jam" name="jam" id="jam"
                                        value="{{ old('jam') }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('jam')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="menit" class="text-[#353535] font-semibold">Menit</label>
                                    <input type="number" placeholder="Type menit" name="menit" id="menit"
                                        value="{{ old('menit') }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('menit')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="detik" class="text-[#353535] font-semibold">Detik</label>
                                    <input type="number" placeholder="Type detik" name="detik" id="detik"
                                        value="{{ old('detik') }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('detik')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="durasi" class="text-[#353535] font-semibold">Durasi</label>
                                    <input type="number" placeholder="Type durasi" name="durasi" id="durasi"
                                        value="{{ old('durasi') }}" required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-1" />
                                    @error('durasi')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex flex-col justify-center">
                                    <label for="status" class="text-[#353535] font-semibold">Status</label>
                                    <label class="mt-2">
                                        <input type="checkbox" id="checkStatus" onclick="checkTim()"
                                            class="toggle toggle-success" />
                                        <input type="hidden" name="status" id="status">
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm btn-primary border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4">Create
                                    setting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction2() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>

    <script>
        function checkTim() {
            let checkBoxSol = document.getElementById("checkSolTim1");
            let checkBoxSol2 = document.getElementById("checkSolTim2");
            let checkBoxSol3 = document.getElementById("checkSolTim3");
            let checkBoxSol4 = document.getElementById("checkSolTim4");
            let checkBoxStatus = document.getElementById("checkStatus");

            if (checkBoxSol.checked == true) {
                document.getElementById("timerSol_1").value = 1;
            } else {
                document.getElementById("timerSol_1").value = "0";
            }

            if (checkBoxSol2.checked == true) {
                document.getElementById("timerSol_2").value = 1;
            } else {
                document.getElementById("timerSol_2").value = "0";
            }

            if (checkBoxSol3.checked == true) {
                document.getElementById("timerSol_3").value = 1;
            } else {
                document.getElementById("timerSol_3").value = "0";
            }

            if (checkBoxSol4.checked == true) {
                document.getElementById("timerSol_4").value = 1;
            } else {
                document.getElementById("timerSol_4").value = "0";
            }

            if (checkBoxStatus.checked == true) {
                document.getElementById("status").value = 1;
            } else {
                document.getElementById("status").value = "0";
            }
        }
    </script>
@endsection
