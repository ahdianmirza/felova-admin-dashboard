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
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px] text-[#353535]">Create New Manual
                        Setting
                    </h1>

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md mt-4">
                        <div class="mt-5">
                            <form action="/manual" method="post">
                                @csrf
                                <div>
                                    <label for="device" class="text-[#353535]">Device</label>
                                    {{-- <input type="text" name="device" id="device" oninput="myFunction()"
                                        class="border block p-1" value="{{ old('device') }}" required> --}}
                                    <input type="text" placeholder="Type device name" name="device" id="device"
                                        oninput="myFunction()" value="{{ old('device') }}" autofocus required
                                        class="input input-bordered bg-white w-full max-w-xs block text-[#353535] mt-2" />
                                    <input type="hidden" name="slug" id="slug" value="" class="border">
                                    @error('device')
                                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="flex">
                                    <div class="mt-4 flex flex-col justify-center">
                                        <label for="pompa" class="text-[#353535] font-semibold">Pompa</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkPompa" onclick="check()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="pompa" id="pompa">
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_1" class="text-[#353535] font-semibold">Solenoid 1</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSol1" onclick="check2()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_1" id="sol_1">
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_2" class="text-[#353535] font-semibold">Solenoid 2</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSol2" onclick="check3()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_2" id="sol_2">
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_3" class="text-[#353535] font-semibold">Solenoid 3</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSol3" onclick="check4()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_3" id="sol_3">
                                        </label>
                                    </div>
                                    <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                                        <label for="sol_4" class="text-[#353535] font-semibold">Solenoid 4</label>
                                        <label class="mt-2">
                                            <input type="checkbox" id="checkSol4" onclick="check5()"
                                                class="toggle toggle-success" />
                                            <input type="hidden" name="sol_4" id="sol_4">
                                        </label>
                                    </div>
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
        function myFunction() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>

    <script>
        function check() {
            let checkBox = document.getElementById("checkPompa");

            if (checkBox.checked == true) {
                document.getElementById("pompa").value = 1;
            } else {
                document.getElementById("pompa").value = "0";
            }
        }

        function check2() {
            let checkBox2 = document.getElementById("checkSol1");

            if (checkBox2.checked == true) {
                document.getElementById("sol_1").value = 1;
            } else {
                document.getElementById("sol_1").value = "0";
            }
        }

        function check3() {
            let checkBox3 = document.getElementById("checkSol2");

            if (checkBox3.checked == true) {
                document.getElementById("sol_2").value = 1;
            } else {
                document.getElementById("sol_2").value = "0";
            }
        }

        function check4() {
            let checkBox4 = document.getElementById("checkSol3");

            if (checkBox4.checked == true) {
                document.getElementById("sol_3").value = 1;
            } else {
                document.getElementById("sol_3").value = "0";
            }
        }

        function check5() {
            let checkBox5 = document.getElementById("checkSol4");

            if (checkBox5.checked == true) {
                document.getElementById("sol_4").value = 1;
            } else {
                document.getElementById("sol_4").value = "0";
            }
        }
    </script>
@endsection
