<!-- Sidebar -->
<div
    class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gray-800 h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Inicio</div>
                </div>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                       
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Panel de control</span>
                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Noticias</div>
                </div>
            </li>
            <li>
                <a href="{{ route('posts.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Agregar Noticia</span>

                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Profesionales</div>
                </div>
            </li>
            <li>
                <a href="{{ route('people.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Agregar profecionales</span>
                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Obras sociales</div>
                </div>
            </li>
            <li>
                <a href="{{ route('datos.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Agregar empresa</span>

                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">KineClub</div>
                </div>
            </li>
            <li>
                <a href="{{ route('kine.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Agregar beneficio</span>

                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Socios</div>
                </div>
            </li>
            <li>
                <a href="{{ route('admin.user-files') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Datos de socios</span>

                </a>
            </li>



        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright CKFM @2023</p>
    </div>
</div>
<!-- ./Sidebar -->
