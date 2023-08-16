<!-- Sidebar Section Start -->
<section class="absolute top-0 left-0 hidden lg:flex items-center">
    <div class="container">
        <div class="lg:flex flex-col bg-[#434738] w-[40vw] md:w-[25vw] lg:w-[10vw] xl:w-[16vw] h-[100vh] fixed z-10">
            <div class="flex justify-end items-center mt-5 lg:mt-0 mr-4">
                <button id="arrow-left" name="arrow-left" type="button" class="text-white w-8 h-8 lg:hidden">
                    <svg class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22Z"
                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.26 15.53L9.73999 12L13.26 8.47" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <a href="/" class="flex justify-center items-center mb-6 mt-6">
                <div>
                    <svg width="47" height="33" viewBox="0 0 47 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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

            <!-- Menu -->
            <div class="flex flex-col justify-between items-center h-screen">
                <!-- Menu Atas -->
                <div class="w-full">
                    <ul class="py-8">
                        <li class="flex flex-col py-5 pl-7">
                            <a href="/"
                                class="flex flex-row items-center group {{ Request::is('/') ? 'text-white' : 'text-[#B4B990]' }}">
                                <div
                                    class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] mr-4 group-hover:text-white">
                                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.75024 19.2502H17.2502C18.3548 19.2502 19.2502 18.3548 19.2502 17.2502V9.75025L12.0002 4.75024L4.75024 9.75025V17.2502C4.75024 18.3548 5.64568 19.2502 6.75024 19.2502Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9.74963 15.7493C9.74963 14.6447 10.6451 13.7493 11.7496 13.7493H12.2496C13.3542 13.7493 14.2496 14.6447 14.2496 15.7493V19.2493H9.74963V15.7493Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>

                                <h3
                                    class="font-medium {{ Request::is('/') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">
                                    Dashboard</h3>
                            </a>
                        </li>
                        <li class="flex flex-col py-5 pl-7">
                            <a href="/graphics"
                                class="flex flex-row items-center group {{ Request::is('graphics') ? 'text-white' : 'text-[#B4B990]' }}">
                                <div
                                    class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] mr-4 group-hover:text-white">
                                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <li class="flex flex-col py-5 pl-7">
                            <a href="/data"
                                class="flex flex-row items-center group {{ Request::is('data') ? 'text-white' : 'text-[#B4B990]' }}">
                                <div
                                    class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] mr-4 group-hover:text-white">
                                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 19.25H16.25C17.3546 19.25 18.25 18.3546 18.25 17.25V9L14 4.75H7.75C6.64543 4.75 5.75 5.64543 5.75 6.75V17.25C5.75 18.3546 6.64543 19.25 7.75 19.25Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18 9.25H13.75V5" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9.75 15.25H14.25" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9.75 12.25H14.25" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>

                                <h3
                                    class="font-medium {{ Request::is('data') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">
                                    Data</h3>
                            </a>
                        </li>
                        <li class="flex flex-col py-5 pl-7">
                            <a href="/manual"
                                class="flex flex-row items-center group {{ Request::is('manual*') ? 'text-white' : 'text-[#B4B990]' }}">
                                <div
                                    class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] group-hover:text-white mr-4">
                                    <svg width="24" height="24" class="fill-current" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                                        <path
                                            d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252V19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2V8.2Z" />
                                        <path
                                            d="M15.58 13.4C14.9174 13.4 14.2697 13.2035 13.7188 12.8354C13.1679 12.4673 12.7385 11.9441 12.485 11.332C12.2314 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9264 6.76437C15.5763 6.63511 16.2498 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.41998 19.25C8.00998 19.25 7.66998 18.91 7.66998 18.5V16.55C7.66998 16.14 8.00998 15.8 8.41998 15.8C8.82998 15.8 9.16998 16.14 9.16998 16.55V18.5C9.16998 18.91 8.83998 19.25 8.41998 19.25ZM8.41998 10.15C8.00998 10.15 7.66998 9.81 7.66998 9.4V5.5C7.66998 5.09 8.00998 4.75 8.41998 4.75C8.82998 4.75 9.16998 5.09 9.16998 5.5V9.4C9.16998 9.81 8.83998 10.15 8.41998 10.15Z" />
                                        <path
                                            d="M8.42001 17.302C7.98008 17.302 7.54446 17.2154 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8276 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0765 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6887 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                                    </svg>

                                </div>

                                <h3
                                    class="font-medium text-lightGray {{ Request::is('manual*') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">
                                    Manual</h3>
                            </a>
                        <li class="flex flex-col py-5 pl-7">
                            <a href="/timer"
                                class="flex flex-row items-center group {{ Request::is('timer*') ? 'text-white' : 'text-[#B4B990]' }}">
                                <div
                                    class="w-5 h-5 md:w-6 md:h-6 2xl:w-[26px] 2xl:h-[26px] group-hover:text-white mr-4">
                                    <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                            stroke-width="1.5" />
                                        <path d="M12 8V12L14 14" stroke-width="1.5" />
                                    </svg>

                                </div>

                                <h3
                                    class="font-medium text-lightGray {{ Request::is('timer*') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">
                                    Timer</h3>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Menu Bawah -->
                {{-- <div>
                        <ul>
                            <li class="flex flex-col py-[25px] group">
                                <a href="settings.php" class="flex flex-row items-center">
                                    <div
                                        class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="fill-current w-current h-current" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                                            <path
                                                d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2Z" />
                                            <path
                                                d="M15.58 13.4C14.9174 13.4 14.2698 13.2035 13.7189 12.8354C13.1679 12.4673 12.7386 11.9441 12.485 11.332C12.2315 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9265 6.76437C15.5763 6.63511 16.2499 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.42001 19.25C8.01001 19.25 7.67001 18.91 7.67001 18.5V16.55C7.67001 16.14 8.01001 15.8 8.42001 15.8C8.83001 15.8 9.17001 16.14 9.17001 16.55V18.5C9.17001 18.91 8.84001 19.25 8.42001 19.25ZM8.42001 10.15C8.01001 10.15 7.67001 9.81 7.67001 9.4V5.5C7.67001 5.09 8.01001 4.75 8.42001 4.75C8.83001 4.75 9.17001 5.09 9.17001 5.5V9.4C9.17001 9.81 8.84001 10.15 8.42001 10.15Z" />
                                            <path
                                                d="M8.42001 17.302C7.98008 17.302 7.54446 17.2153 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8275 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0764 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6886 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                                        </svg>
                                    </div>

                                    <h3
                                        class="font-medium text-lightGray group-hover:text-white text-[14px] 2xl:text-base">
                                        Settings</h3>
                                </a>
                            </li>
                            <li class="flex flex-col py-[25px] group mb-14">
                                <a href="logout.php" class="flex flex-row items-center"
                                    onclick="return confirm('Apakah Anda yakin untuk keluar ?')">
                                    <div
                                        class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="stroke-current w-current h-current" fill="none"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.1 16.46C14.79 20.06 12.94 21.53 8.89 21.53H8.76C4.29 21.53 2.5 19.74 2.5 15.27V8.75C2.5 4.28 4.29 2.49 8.76 2.49H8.89C12.91 2.49 14.76 3.94 15.09 7.48M9 12.02L20.38 12.02M18.15 15.37L21.5 12.02L18.15 8.67"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3
                                        class="font-medium text-lightGray group-hover:text-white text-[14px] 2xl:text-base">
                                        Logout</h3>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
            </div>
        </div>

        <!-- Sidebar Black Screen -->
        <div id="sidebar-black-screen"
            class="hidden ml-[32vw] md:ml-[20vw] w-[70vw] md:w-[80vw] bg-primary opacity-40 h-[100vh] fixed z-45">
        </div>
    </div>
</section>
<!-- Sidebar Section End -->
