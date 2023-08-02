@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center">
                {{-- Top Part Start --}}
                <div class="w-[84vw] flex justify-center items-center mt-12 lg:ml-[16vw] mb-4 md:mb-7">
                    <div class="w-full flex justify-between items-center">
                        <!-- Judul Section -->
                        <div class="flex flex-col justify-center pl-10">
                            <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Dashboard</h1>
                            <p class="text-[#CCCCCC]">Good to see you, Vincent !</p>
                        </div>

                        {{-- Search Bar --}}
                        <div class="flex justify-center">
                            <form action=""
                                class="flex justify-center items-center w-[360px] h-[52px] border border-[#353535] rounded-2xl">
                                <label for="search">
                                    <div class="px-2">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25.6667 25.6667L20.6667 20.6667M6.33337 14.6667C6.33337 10.0643 10.0643 6.33334 14.6667 6.33334C19.2691 6.33334 23 10.0643 23 14.6667C23 19.2691 19.2691 23 14.6667 23C10.0643 23 6.33337 19.2691 6.33337 14.6667Z"
                                                stroke="#353535" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </label>
                                <input type="text" name="search" id="search" placeholder="Track data"
                                    class="w-full block py-[13px] pl-2 pr-[48px] bg-[#F7F7F7] rounded-2xl placeholder:text-[#CCCCCC] focus:outline-none">
                            </form>
                        </div>

                        {{-- Date and Profil --}}
                        <div class="flex justify-center items-center pr-12">
                            <p class="mr-[34px]">29 July 2023</p>
                            <img src="img/profile.png" class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-full"
                                alt="Profil">
                        </div>
                    </div>
                </div>
                {{-- Top Part End --}}

                {{-- Dashboard Layout Start --}}
                <main class="lg:ml-[16vw] flex flex-col justify-center items-center">
                    <div class="flex flex-col">
                        <div class="flex flex-col justify-center items-center">
                            {{-- Last Task Box Start --}}
                            <div
                                class="w-[95vw] lg:w-[74vw] xl:w-[78vw] bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
                                {{-- Title --}}
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h1 class="text-2xl font-extrabold">Last Task</h1>
                                        <p><span class="font-bold">120 total</span>, <small class="text-[#A3A4A8]">proceed
                                                to resolve them</small>
                                        </p>
                                    </div>

                                    <div class="flex">
                                        <div class="flex flex-col items-center mr-4">
                                            <h1 class="text-2xl font-extrabold mb-1">94</h1>
                                            <p class="text-[#A3A4A8]">Done</p>
                                        </div>
                                        <div class="border-l-2 border-slate-100"></div>
                                        <div class="flex flex-col items-center ml-4">
                                            <h1 class="text-2xl font-extrabold mb-1">23</h1>
                                            <p class="text-[#A3A4A8]">In Progress</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- Title --}}

                                {{-- Table --}}
                                <div class="mt-5">
                                    <table class="table-auto border-none text-xs md:text-[14px] w-full">
                                        <thead>
                                            <tr class="border-t-2">
                                                <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Device</th>
                                                <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status Pompa
                                                </th>
                                                <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status Selenoid
                                                </th>
                                                <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b-2">
                                                <td class="text-center">HC001</td>
                                                <td class="text-center">
                                                    <span
                                                        class="border-none py-1 px-3 rounded-full bg-[#AACA77] text-xs">ON</span>
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
                                            <tr class="border-b-2">
                                                <td class="text-center">HC001</td>
                                                <td class="text-center">
                                                    <span
                                                        class="border-none py-1 px-3 rounded-full bg-[#FED4D5] text-xs">OFF</span>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- Table --}}
                            </div>
                            {{-- Last Task Box Start --}}
                        </div>
                    </div>
                </main>
                {{-- Dashboard Layout End --}}
            </div>
        </div>
    </div>
@endsection
