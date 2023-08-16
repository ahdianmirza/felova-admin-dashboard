{{-- <div class="d-flex my-4">
    <button id="push"
        class="inline-block mr-4 rounded border-2 border-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-blue-600 shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
        Push
    </button>
    <button id="side"
        class="bg-blue mr-4 inline-block rounded border-2 border-transparent px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">
        Side
    </button>
    <button id="over"
        class="inline-block rounded border-2 border-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-blue-600 shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
        Over
    </button>
</div> --}}

<!-- Sidenav -->
<nav id="sidenav-2"
    class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-[#434738] shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
    data-te-sidenav-init data-te-sidenav-hidden="true" data-te-sidenav-mode="over" data-te-sidenav-content="#content">
    <a href="/" class="flex justify-center items-center mb-6 mt-6">
        <div>
            <svg width="47" height="33" viewBox="0 0 47 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.73953 27.8605C3.42128 29.6145 2.76501 31.302 2.4718 32.2433C2.33807 32.6724 1.89575 32.9281 1.45717 32.8297C0.995846 32.7264 0.708282 32.2706 0.814682 31.8102C1.56656 28.5586 3.08999 22.2742 12.2988 16.3551C23.3963 9.22214 30.8042 16.1508 39.8177 8.29159C39.8177 8.29159 35.0827 11.5469 21.771 10.4541C11.2344 9.58924 4.91073 18.6941 4.78078 18.8347C4.79014 18.6872 5.46974 9.22324 14.4985 4.0105C24.5435 -1.78901 36.2881 8.45514 46.9902 0.24578C46.9902 0.24578 47.1704 17.4789 34.4073 24.8477C25.9827 29.7117 17.8942 26.7442 11.4481 25.3508C8.92332 24.8049 6.29544 25.79 4.73953 27.8605Z"
                    fill="white" />
            </svg>
        </div>
        <h3 class="ml-2 font-bold text-white text-[18px] md:text-[20px] 2xl:text-2xl">Felova</h3>
    </a>

    <div class="flex justify-center align-items-center">
        <div class="w-[200px] border-t-2 border-[#F7F7F7]"></div>
    </div>

    <ul class="relative py-8 m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
        {{-- <li class="relative">
            <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-white outline-none transition duration-300 ease-linear hover:bg-[#B4B990] hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>
                <span class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white dark:[&>svg]:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                    </svg>
                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.75024 19.2502H17.2502C18.3548 19.2502 19.2502 18.3548 19.2502 17.2502V9.75025L12.0002 4.75024L4.75024 9.75025V17.2502C4.75024 18.3548 5.64568 19.2502 6.75024 19.2502Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M9.74963 15.7493C9.74963 14.6447 10.6451 13.7493 11.7496 13.7493H12.2496C13.3542 13.7493 14.2496 14.6447 14.2496 15.7493V19.2493H9.74963V15.7493Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span>Dashboard</span>
            </a>
        </li> --}}
        <li class="flex flex-col py-5 pl-7">
            <a href="/"
                class="flex flex-row items-center group {{ Request::is('coba') ? 'text-white' : 'text-[#B4B990]' }}">
                <div class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] mr-4 group-hover:text-white">
                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.75024 19.2502H17.2502C18.3548 19.2502 19.2502 18.3548 19.2502 17.2502V9.75025L12.0002 4.75024L4.75024 9.75025V17.2502C4.75024 18.3548 5.64568 19.2502 6.75024 19.2502Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M9.74963 15.7493C9.74963 14.6447 10.6451 13.7493 11.7496 13.7493H12.2496C13.3542 13.7493 14.2496 14.6447 14.2496 15.7493V19.2493H9.74963V15.7493Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <h3
                    class="font-medium {{ Request::is('coba') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">
                    Dashboard</h3>
            </a>
        </li>
        <li class="flex flex-col py-5 pl-7">
            <a href="/graphics"
                class="flex flex-row items-center group {{ Request::is('graphics') ? 'text-white' : 'text-[#B4B990]' }}">
                <div class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] mr-4 group-hover:text-white">
                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5 6C9.01664 6 7.5666 6.43987 6.33323 7.26398C5.09986 8.08809 4.13856 9.25943 3.57091 10.6299C3.00325 12.0003 2.85472 13.5083 3.14411 14.9632C3.4335 16.418 4.14781 17.7544 5.1967 18.8033C6.2456 19.8522 7.58197 20.5665 9.03683 20.8559C10.4917 21.1453 11.9997 20.9968 13.3701 20.4291C14.7406 19.8614 15.9119 18.9001 16.736 17.6668C17.5601 16.4334 18 14.9834 18 13.5H10.5V6Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.5 10.5H21C21 8.51088 20.2098 6.60322 18.8033 5.1967C17.3968 3.79018 15.4891 3 13.5 3V10.5Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <h3
                    class="font-medium {{ Request::is('graphics') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">
                    Graphics</h3>
            </a>
        </li>
        {{-- <li class="relative">
            <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>
                <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <span>Category 1</span>
                <span
                    class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                    data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </a>
            <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>Link 2</a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>Link 3</a>
                </li>
            </ul>
        </li>
        <li class="relative">
            <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>
                <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <span>Category 2</span>
                <span
                    class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                    data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </a>
            <ul class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>Link 4</a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>Link 5</a>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>
<!-- Sidenav -->

<div class="p-5 !pl-[260px] text-center" id="content">
    <!-- Toggler -->
    <div class="flex flex-col text-start text-black">
        {{-- Top Part Start --}}
        <div class="w-full flex justify-center items-center mb-5 md:mb-7">
            <div class="w-full flex justify-between items-center">
                <div class="flex justify-center items-center">
                    <!-- Toggler -->
                    <div class="flex justify-center items-center">
                        <button
                            class="w-fit mr-4 rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                            data-te-sidenav-toggle-ref data-te-target="#sidenav-2" aria-controls="#sidenav-2"
                            aria-haspopup="true">
                            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <!-- Judul Section -->
                    <div class="flex flex-col justify-center">
                        <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Dashboard</h1>
                        <p class="text-[#CCCCCC] text-xs lg:text-base">Good to see you, Vincent !</p>
                    </div>
                </div>

                {{-- Date and Profil --}}
                <div class="flex lg:justify-center items-center">
                    <p class="mr-2 lg:mr-[34px] text-[#353535] text-xs lg:text-base">
                        {{ \Carbon\Carbon::now()->format('d F Y') }}
                    </p>
                    <img src="img/profile.png" class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-full"
                        alt="Profil">
                </div>
            </div>
        </div>
        {{-- Top Part End --}}

        {{-- Last Task Box Start --}}
        <div
            class="bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md flex flex-col justify-center">
            {{-- Title --}}
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-lg lg:text-2xl font-extrabold text-[#353535]">Latest Task</h1>
                    <p class="text-xs lg:text-base"><span class="font-bold text-[#353535]">{{ $manuals_all->count() }}
                            total,</span>
                        <small class="text-[#A3A4A8] text-xs lg:text-base">proceed
                            to resolve them</small>
                    </p>
                </div>

                {{-- Search Bar --}}
                <div class="flex justify-center">
                    <form action=""
                        class="hidden lg:flex justify-center items-center w-[100px] lg:w-[360px] lg:h-[52px] border border-[#353535] rounded-2xl">
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
                            class="w-full block py-[13px] pl-2 pr-[48px] text-[#353535] bg-white rounded-2xl placeholder:text-[#CCCCCC] focus:outline-none">
                    </form>
                </div>

                <div class="flex">
                    <div class="flex flex-col items-center mr-2 lg:mr-4">
                        <h1 class="text-lg lg:text-2xl font-extrabold lg:mb-1 text-[#353535]">94</h1>
                        <p class="text-[#A3A4A8] text-xs lg:text-base">Done</p>
                    </div>
                    <div class="border-l-2 border-slate-100"></div>
                    <div class="flex flex-col items-center ml-2 lg:ml-4">
                        <h1 class="text-lg lg:text-2xl font-extrabold lg:mb-1 text-[#353535]">23
                        </h1>
                        <p class="text-[#A3A4A8] text-xs lg:text-base">In Progress</p>
                    </div>
                </div>
            </div>
            {{-- Title --}}

            {{-- Table --}}
            <div class="mt-5 w-full">
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
                        @foreach ($manuals as $manual)
                            <tr class="border-b-2">
                                <td class="text-center text-[#353535] font-semibold">
                                    {{ $manual->device }}</td>
                                <td class="text-center text-[#353535] font-semibold">
                                    <div class="flex justify-center items-center">
                                        @if ($manual->pompa == 1)
                                            <div
                                                class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#b3d086] hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                                <span class="hidden lg:block text-[#f5f8ed] stroke-current">
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
                                                </span>
                                                ON
                                            </div>
                                        @else
                                            <div
                                                class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#fda4a6] hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                                <span class="hidden lg:block text-[#fef2f2] stroke-current">
                                                    <svg width="20" height="20" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 9V12.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12ZM12 15.75H12.008V15.758H12V15.75Z"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </span>
                                                OFF
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td
                                    class="text-center flex justify-center gap-2 items-center py-2 text-[#353535] font-semibold">
                                    @if ($manual->sol_1 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#b3d086] hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                1
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#fda4a6] hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                1
                                            </span>
                                            OFF
                                        </div>
                                    @endif

                                    @if ($manual->sol_2 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#b3d086] hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                2
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#fda4a6] hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                2
                                            </span>
                                            OFF
                                        </div>
                                    @endif

                                    @if ($manual->sol_3 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#b3d086] hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                3
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#fda4a6] hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                3
                                            </span>
                                            OFF
                                        </div>
                                    @endif

                                    @if ($manual->sol_4 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#b3d086] hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                4
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-[#fda4a6] hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                4
                                            </span>
                                            OFF
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div
                                        class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-lg text-xs lg:text-[14px] bg-[#EFFDFF] hover:bg-[#cff7fe] cursor-default hover:shadow-md border-none">
                                        <div class="stroke-current text-[#4F8A90]">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                                    stroke-width="1.5" />
                                                <path d="M12 8V12L14 14" stroke-width="1.5" />
                                            </svg>
                                        </div>
                                        <p class="hidden lg:block text-xs lg:text-[14px] text-[#4F8A90] font-semibold">
                                            In
                                            Progress</p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- Table --}}
        </div>
        {{-- Last Task Box Start --}}
    </div>
</div>
