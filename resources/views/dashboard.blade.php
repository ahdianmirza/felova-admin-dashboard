@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center">
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
            </div>
        </div>
    </div>
@endsection
