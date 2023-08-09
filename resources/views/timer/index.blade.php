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
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Pompa
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Selenoid
                                        </th>
                                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
