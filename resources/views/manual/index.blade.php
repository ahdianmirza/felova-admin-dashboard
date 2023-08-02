@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Manual</h1>

                    <div class="my-4">
                        <a href="/manual/create" class="border-none px-3 py-1 bg-[#AACA77] rounded-lg">New setting</a>
                    </div>

                    @if (session()->has('success'))
                        <small class="text-[#AACA77] my-2">{{ session('success') }}</small>
                    @endif

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
                        <div class="mt-5">
                            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                                <thead>
                                    <tr class="border-t-2">
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Device</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status Pompa
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status Selenoid
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($manuals as $manual)
                                        <tr class="border-b-2">
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $manual->device }}</td>
                                            <td class="text-center">
                                                {{ $manual->pompa }}
                                                {{-- <span
                                                    class="border-none py-1 px-3 rounded-full bg-[#AACA77] text-xs">ON</span> --}}
                                            </td>
                                            <td class="text-center flex flex-col items-center py-2">
                                                <p class="border-none my-1 py-1 px-4 rounded-full bg-[#AACA77]">
                                                    {{ $manual->sol_1 }}</p>
                                                <p class="border-none my-1 py-1 px-4 rounded-full bg-[#FED4D5]">
                                                    {{ $manual->sol_2 }}</p>
                                                <p class="border-none my-1 py-1 px-4 rounded-full bg-[#AACA77]">
                                                    {{ $manual->sol_3 }}</p>
                                                <p class="border-none my-1 py-1 px-4 rounded-full bg-[#FED4D5]">
                                                    {{ $manual->sol_4 }}</p>
                                            </td>
                                            <td class="text-center">
                                                <div class="flex justify-center items-center">
                                                    <div
                                                        class="flex justify-center items-center px-2 py-1 border-none rounded-md bg-[#EFFDFF]">
                                                        <div class="stroke-current text-[#4F8A90] mr-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                                                    stroke-width="1.5" />
                                                                <path d="M12 8V12L14 14" stroke-width="1.5" />
                                                            </svg>
                                                        </div>
                                                        <p class="text-[#4F8A90]">In Progress</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr class="border-b-2">
                                        <td class="text-center">HC001</td>
                                        <td class="text-center">
                                            <span class="border-none py-1 px-3 rounded-full bg-[#FED4D5] text-xs">OFF</span>
                                        </td>
                                        <td class="text-center flex flex-col items-center py-2">
                                            <p class="border-none my-1 py-1 px-4 rounded-full bg-[#AACA77]">1</p>
                                            <p class="border-none my-1 py-1 px-4 rounded-full bg-[#FED4D5]">2</p>
                                            <p class="border-none my-1 py-1 px-4 rounded-full bg-[#AACA77]">3</p>
                                            <p class="border-none my-1 py-1 px-4 rounded-full bg-[#FED4D5]">4</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="flex justify-center items-center">
                                                <div
                                                    class="flex justify-center items-center px-2 py-1 border-none rounded-md bg-[#EFFEEB]">
                                                    <div class="stroke-current text-[#375028] mr-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75C16.0041 4.75 19.25 7.99594 19.25 12C19.25 16.0041 16.0041 19.25 12 19.25C7.99594 19.25 4.75 16.0041 4.75 12Z"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M9.75 12.75L10.1837 13.6744C10.5275 14.407 11.5536 14.4492 11.9564 13.7473L14.25 9.75"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <p class="text-[#375028]">Done</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- 
                    @foreach ($manual_data as $data)
                        <ul>
                            <li>{{ $data['device'] }}</li>
                            <li>{{ $data['pompa'] }}</li>
                            <li>{{ $data['sol_1'] }}</li>
                            <li>{{ $data['sol_2'] }}</li>
                            <li>{{ $data['sol_3'] }}</li>
                            <li>{{ $data['sol_4'] }}</li>
                        </ul>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection
