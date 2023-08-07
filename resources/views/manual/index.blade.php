@extends('layouts.main')

@section('container')
    <div class="flex flex-wrap">
        <div>
            <div class="w-full self-center">
                <!-- Judul Section -->
                <div class="mt-12 ml-4 mb-4 md:mb-7 lg:ml-[16rem]">
                    <h1 class="font-extrabold text-[#353535] text-[24px] md:text-[32px]">Manual</h1>

                    <div class="mt-4 mb-6">
                        <a href="/manual/create"
                            class="btn btn-sm btn-primary border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE]">New
                            setting</a>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-success mt-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <div
                        class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
                        <div class="mt-5">
                            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                                <thead>
                                    <tr class="border-t-2">
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Device</th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Pompa
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Selenoid
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($manuals as $manual)
                                        <tr class="border-b-2">
                                            <td class="text-center text-[#353535] font-semibold">{{ $loop->iteration }}</td>
                                            <td class="text-center text-[#353535] font-semibold">{{ $manual->device }}</td>
                                            <td class="text-center text-[#353535] font-semibold">
                                                @if ($manual->pompa == 1)
                                                    <span class="border-none py-1 px-3 rounded-full bg-[#b3d086]">ON</span>
                                                @else
                                                    <span class="border-none py-1 px-3 rounded-full bg-[#fda4a6]">OFF</span>
                                                @endif
                                            </td>
                                            <td
                                                class="text-center flex flex-col items-center py-2 text-[#353535] font-semibold">
                                                @if ($manual->sol_1 == 1)
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#b3d086]">
                                                        ON
                                                    </p>
                                                @else
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#fda4a6]">
                                                        OFF
                                                    </p>
                                                @endif

                                                @if ($manual->sol_2 == 1)
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#b3d086]">
                                                        ON
                                                    </p>
                                                @else
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#fda4a6]">
                                                        OFF
                                                    </p>
                                                @endif

                                                @if ($manual->sol_3 == 1)
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#b3d086]">
                                                        ON
                                                    </p>
                                                @else
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#fda4a6]">
                                                        OFF
                                                    </p>
                                                @endif

                                                @if ($manual->sol_4 == 1)
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#b3d086]">
                                                        ON
                                                    </p>
                                                @else
                                                    <p class="border-none my-1 py-1 px-4 rounded-full bg-[#fda4a6]">
                                                        OFF
                                                    </p>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="flex justify-center items-center">
                                                    <div class="flex">
                                                        {{-- Update --}}
                                                        <div
                                                            class="flex justify-center items-center p-1 border-none rounded-md bg-[#b2ede5] mr-2">
                                                            <a href="/manual/{{ $manual->id }}/edit"
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
                                                            <form action="/manual/{{ $manual->id }}" method="post">
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
