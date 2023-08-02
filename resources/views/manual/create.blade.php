@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Create New Setting</h1>

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md mt-4">
                        <div class="mt-5">
                            <form action="/manual" method="post">
                                @csrf
                                <div>
                                    <label for="device">Device</label>
                                    <input type="text" name="device" id="device" class="border block p-1"
                                        value="{{ old('device') }}" required>
                                    @error('device')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex">
                                    <div class="mt-4">
                                        <label for="pompa">Pompa</label>
                                        <select name="pompa" id="pompa" class="border block p-1">
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                    <div class="mt-4 ml-6">
                                        <label for="sol_1">Solenoid 1</label>
                                        <select name="sol_1" id="sol_1" class="border block p-1">
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                    <div class="mt-4 ml-6">
                                        <label for="sol_2">Solenoid 2</label>
                                        <select name="sol_2" id="sol_2" class="border block p-1">
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                    <div class="mt-4 ml-6">
                                        <label for="sol_3">Solenoid 3</label>
                                        <select name="sol_3" id="sol_3" class="border block p-1">
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                    <div class="mt-4 ml-6">
                                        <label for="sol_4">Solenoid 4</label>
                                        <select name="sol_4" id="sol_4" class="border block p-1">
                                            <option value="1">On</option>
                                            <option value="0">Off</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="px-3 py-1 bg-slate-300 mt-4">Create
                                    setting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
