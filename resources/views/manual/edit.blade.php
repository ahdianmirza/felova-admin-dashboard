@extends('layouts.main')

@section('container')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 25px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Edit Setting</h1>

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md mt-4">
                        <div class="mt-5">
                            <form action="/manual/{{ $setting->id }}" method="post">
                                @method('put')
                                @csrf
                                <div>
                                    <label for="device">Device</label>
                                    <input type="text" name="device" id="device" oninput="myFunction()"
                                        class="border block p-1" value="{{ old('device', $setting->device) }}" required>
                                    <input type="hidden" name="slug" id="slug" value="" class="border">
                                    @error('device')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex">
                                    <div class="mt-4 flex flex-col justify-center items-center">
                                        <label for="pompa">Pompa</label>
                                        <label class="switch mt-2">
                                            <input type="checkbox" name="pompa">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_1">Solenoid 1</label>
                                        <label class="switch mt-2">
                                            <input type="checkbox" name="sol_1">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_2">Solenoid 2</label>
                                        <label class="switch mt-2">
                                            <input type="checkbox" name="sol_2">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_3">Solenoid 3</label>
                                        <label class="switch mt-2">
                                            <input type="checkbox" name="sol_3">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_4">Solenoid 4</label>
                                        <label class="switch mt-2">
                                            <input type="checkbox" name="sol_4">
                                            <span class="slider round"></span>
                                        </label>
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

    <script>
        function myFunction() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>
@endsection
