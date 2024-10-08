<nav class="glass z-10 lg:py-8 md:pb-0 invisible lg:visible">
    <div class="2xl:max-w-[85%] xl:max-w-[95%] xl:mx-auto md:mx-4 ">
        <div class="flex items-center md:justify-between sm:justify-center h-16 ">
            <a href="/">
                <img class="mt-14 2xl:w-[200px] lg:w-[190px] md:w-[190px] md:mt-12 w-[45%] md:ml-0 ml-32 "
                    src="{{ asset('storage/logo/logowhite.svg') }}" alt="Logo">
            </a>
            <div
                class="flex items-end invisible lg:visible lg:text-lg md:text-[0.9rem] sm:text-[0.5rem] 2xl:gap-10 xl:gap-6 lg:gap-14 lg:mt-0 md:mt-8">
                <div class="mr-4">
                    <a class="flex items-center justify-center sm:justify-start gap-1.5 group" href="mailto:contacto@kinesiologosmza.com">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span
                            class="text-white transition font-Poppins  hover:text-gray-300">contacto@kinesiologosmza.com</span>
                    </a>
                </div>
                <div class="mr-4 ">
                    <a class="flex items-center justify-center sm:justify-start gap-1.5 group" href="/">
                        <svg width="17" height="17" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2037 12.2681L13.6637 11.9781C13.365 11.943 13.0623 11.9761 12.7782 12.0748C12.4942 12.1735 12.2362 12.3353 12.0237 12.5481L10.1837 14.3881C7.34486 12.9443 5.03745 10.6369 3.59367 7.79807L5.44367 5.94807C5.87367 5.51807 6.08367 4.91807 6.01367 4.30807L5.72367 1.78807C5.66698 1.30024 5.43287 0.850304 5.06591 0.523915C4.69895 0.197526 4.22478 0.0174842 3.73367 0.0180678H2.00367C0.873674 0.0180678 -0.0663265 0.958068 0.00367348 2.08807C0.533673 10.6281 7.36367 17.4481 15.8937 17.9781C17.0237 18.0481 17.9637 17.1081 17.9637 15.9781V14.2481C17.9737 13.2381 17.2137 12.3881 16.2037 12.2681Z"
                                fill="white" />
                        </svg>
                        <span class="text-white hover:text-gray-300 font-Poppins ">4298915</span>
                    </a>
                </div>
                @guest
                <button
                    class="flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 py-1  hover:bg-blue-600 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg">
                    <a class="font-Poppins" href="{{ route('login') }}">Ingresar</a>
                </button>
                @endguest
                @auth
                <li>
                    @if (auth()->check() &&
                    auth()->user()->hasRole('user'))
                    <a href="{{ route('user.home') }}"
                        class="flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 py-1  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg">
                        Mi panel
                    </a>
                    @elseif(auth()->check() &&
                    auth()->user()->hasRole('admin'))
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 py-1  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg">
                        Mi panel
                    </a>
                    @endif
                </li>
                @endauth

                <button
                    class=" flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 py-1  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg">

                    <a class="font-Poppins" href="{{ route('asociate.index') }}">Asociate</a>
                </button>

            </div>
        </div>
    </div>
    <div
        class="2xl:max-w-[85%] xl:max-w-[95%]: xl:mx-auto lg:mx-4  lg:border-none  mt-0 invisible lg:visible h-0 lg:h-auto">
        <div class="flex lg:justify-end md:justify-center">
            <div id="items" class="flex items-center  2xl:mr-0 xl:mr-4 md:gap-4 sm:gap-0 sm:text-[0.65rem]">
                <a href="/"
                    class=" font-Poppins  text-white px-3 py-2 lg:text-lg md:text-[0.9rem] mt-2 ">Inicio</a>
                <div class="h-[60%] w-[1px] bg-white mt-3 invisible lg:visible"></div>
                <a href="{{ route('quienes.index') }}"
                    class="font-Poppins  text-white px-3 py-2 lg:text-lg md:text-[0.9rem] mt-2 ">Quiénes
                    somos</a>
                <div class="h-[60%] w-[1px] bg-white mt-3 invisible lg:visible"></div>
                <a
                    href="{{ route('kineClub.index') }}" class="font-Poppins  text-white px-3 py-2 lg:text-lg md:text-[0.9rem] mt-2 ">KineClub</a>
                <div class="h-[60%] w-[1px] bg-white mt-3 invisible lg:visible"></div>
                <a
                    href="{{ route('allPost') }}" class="font-Poppins  text-white px-3 py-2 lg:text-lg md:text-[0.9rem] mt-2 ">Noticias</a>
                <div class="h-[60%] w-[1px] bg-white mt-3 invisible lg:visible"></div>
                <a
                    href="{{ route('obras.index') }}" class="font-Poppins  text-white px-3 py-2 lg:text-lg md:text-[0.9rem] mt-2 ">Obras
                    Sociales y Prepagas</a>
                <div class="h-[60%] w-[1px] bg-white mt-3 invisible lg:visible"></div>
                <div
                    class="font-Poppins  text-white px-3 py-2 lg:text-lg md:text-[0.9rem] mt-2   bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm  mr-2 mb-2">
                    <a href="{{ route('profesionales.index') }}" class="">Profesionales
                        Asociados</a>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- nav responsive --}}
<nav class="glass fixed w-screen z-20 top-0 left-0 border-b border-gray-200 visible lg:invisible">
    <div class="w-screen flex flex-wrap items-center justify-between  mx-auto p-4">
        <a href="/">
            <img src="{{ asset('storage/logo/logowhite.svg') }}" class="h-8 mr-3" alt="Logo">
        </a>
        <div class="flex gap-4">
            @auth
            <button
                class=" flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 py-0 rounded-lg  hover:bg-blue-600">
                <span class="font-Poppins"> <a href="{{ route('user.home') }}">Mi panel</a> </span>
            </button>
            @endauth
            @guest
                <button
                    class="flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 hover:bg-blue-600 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg">
                    <a class="font-Poppins" href="{{ route('login') }}">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                    </a>
                </button>
                @endguest
            @guest
            <button
                class=" flex flex-row items-center gap-2 bg-[#0051A7] text-white px-3 py-0 rounded-lg  hover:bg-blue-600">
                <span class="font-Poppins"> <a href="{{ route('asociate.index') }}">Asociate</a> </span>
            </button>
            @endguest
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden  w-screen" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4  border-gray-100 rounded-lg  ">
                <li>
                    <a href="/"
                        class="font-Poppins block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                        aria-current="page">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('quienes.index') }}"
                        class="font-Poppins block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Quienes
                        Somos</a>
                </li>
                <li>
                    <a href="{{ route('kineClub.index') }}"
                        class="font-Poppins block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Kine
                        Club</a>
                </li>
                <li>
                    <a href="{{ route('allPost') }}"
                        class="font-Poppins block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Noticias</a>
                </li>
                <li>
                    <a href="{{ route('obras.index') }}"
                        class="font-Poppins block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Obras
                        Sociales y Prepagas</a>
                </li>
                <li>
                    <a href="{{ route('profesionales.index') }}"
                        class="font-Poppins block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 hover:text-gray-800  md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Profesionales
                        Asociados</a>
                </li>


            </ul>
        </div>
        <script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
</nav>