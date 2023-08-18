<!--Main Navigation-->
<header>
    <!-- Sidenav -->
    <nav id="sidenav-1"
        class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-[#434738] shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 xl:data-[te-sidenav-hidden='false']:translate-x-0"
        data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-mode-breakpoint-over="0"
        data-te-sidenav-mode-breakpoint-side="xl" data-te-sidenav-content="#content" data-te-sidenav-accordion="true">
        <a class="flex items-center justify-center py-3 outline-none" href="#!" data-te-ripple-init
            data-te-ripple-color="primary">
            <img src="img/morf-vanili.png" alt="Logo Vanili" class="w-12">
            <span class="ml-2 font-bold text-white text-[18px] md:text-[20px] 2xl:text-2xl">Felova</span>
        </a>

        <div class="flex justify-center align-items-center">
            <div class="w-[220px] border-t-2 border-[#F7F7F7]"></div>
        </div>

        <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('coba') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="/coba" data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
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
                    <span
                        class="font-medium {{ Request::is('coba') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Dashboard</span>
                </a>
            </li>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('manual') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="/coba" data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg width="24" height="24" class="fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                            <path
                                d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252V19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2V8.2Z" />
                            <path
                                d="M15.58 13.4C14.9174 13.4 14.2697 13.2035 13.7188 12.8354C13.1679 12.4673 12.7385 11.9441 12.485 11.332C12.2314 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9264 6.76437C15.5763 6.63511 16.2498 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.41998 19.25C8.00998 19.25 7.66998 18.91 7.66998 18.5V16.55C7.66998 16.14 8.00998 15.8 8.41998 15.8C8.82998 15.8 9.16998 16.14 9.16998 16.55V18.5C9.16998 18.91 8.83998 19.25 8.41998 19.25ZM8.41998 10.15C8.00998 10.15 7.66998 9.81 7.66998 9.4V5.5C7.66998 5.09 8.00998 4.75 8.41998 4.75C8.82998 4.75 9.16998 5.09 9.16998 5.5V9.4C9.16998 9.81 8.83998 10.15 8.41998 10.15Z" />
                            <path
                                d="M8.42001 17.302C7.98008 17.302 7.54446 17.2154 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8276 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0765 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6887 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                        </svg>
                    </span>
                    <span
                        class="font-medium {{ Request::is('manual') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Manual</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Sidenav -->
</header>
<!--Main Navigation-->
