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
@endsection
