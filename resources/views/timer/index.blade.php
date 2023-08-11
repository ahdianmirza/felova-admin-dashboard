@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-[#353535] text-[24px] md:text-[32px] mb-4">Timer</h1>

                    {{-- Table --}}
                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white p-3 rounded-lg md:rounded-xl shadow-md md:shadow-md">
                        <div class="flex items-center justify-between">
                            <div class="ml-2">
                                <h1 class="text-2xl font-extrabold text-[#353535]">Timer Setting Lists</h1>
                                <p><span class="font-bold text-[#353535]">120 total,</span> <small
                                        class="text-[#A3A4A8]">proceed
                                        to resolve them</small>
                                </p>
                            </div>

                            <div class="mr-2">
                                <a href="/timer/create"
                                    class="btn btn-sm btn-primary border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE]">New
                                    setting</a>
                            </div>
                        </div>


                        <div class="mt-5">
                            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                                <thead>
                                    <tr class="border-t-2">
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Device</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Hari</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No. Jadwal</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Waktu
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Solenoid</th>
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Durasi</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($timers as $timer)
                                        <tr class="border-b-2">
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $loop->iteration }}
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $timer->device }}
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $timer->hari }}
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $timer->noJadwal }}
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">
                                                {{ $timer->jam < 10 ? "0$timer->jam" : "$timer->jam" }}:{{ $timer->menit < 10 ? "0$timer->menit" : "$timer->menit" }}:{{ $timer->detik < 10 ? "0$timer->detik" : "$timer->detik" }}
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $timer->solenoid }}
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $timer->durasi }}
                                                menit
                                            </td>
                                            <td class="text-center text-[#353535] font-semibold py-2">{{ $timer->status }}
                                            </td>
                                            <td class="text-center">
                                                <div class="flex justify-center items-center">
                                                    <div class="flex">
                                                        {{-- Update --}}
                                                        <div
                                                            class="flex justify-center items-center p-1 border-none rounded-md bg-[#b2ede5] mr-2">
                                                            <a href="/timer/{{ $timer->id }}/edit"
                                                                class="stroke-current text-[#01875d]">
                                                                <svg width="24" height="24" fill="none"
                                                                    viewBox="0 0 24 24">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1.5"
                                                                        d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z">
                                                                    </path>
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1.5"
                                                                        d="M19.25 19.25H13.75"></path>
                                                                </svg>
                                                            </a>
                                                        </div>

                                                        {{-- Delete --}}
                                                        <div
                                                            class="flex justify-center items-center p-1 border-none rounded-md bg-[#ffd6ed]">
                                                            <form action="/timer/{{ $timer->id }}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="stroke-current text-[#bf3056]"
                                                                    onclick="return confirm('Are you sure ?')">
                                                                    <svg width="24" height="24" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75">
                                                                        </path>
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5">
                                                                        </path>
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M5 7.75H19"></path>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
