
<div data-dial-init class="fixed right-6 bottom-6 group">
    <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
        aria-controls="drawer-navigation"
        class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
        <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
        </svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>

<!-- drawer component -->
<div id="drawer-navigation"
    class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
    
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
        <div class="w-full flex justify-center">
         <img src="{{asset('storage/logo/logoblack.svg')}}" class="w-20 mr-3 " alt="Flowbite Logo" />

        </div>
         
      </a>
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5">
                <div class="flex flex-row gap-2 items-center h-8">

                    <div class="text-xl font-medium tracking-wide text-gray-900">Noticias</div>
                </div>
            </li>
            <li>
                <a href="{{ route('posts.index') }}"
                    class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 pr-6 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4">
                    <span class="inline-flex justify-center items-center ml-4"></span>
                    <span class="ml-2 text-lg tracking-wide truncate font-light">Agregar Noticia</span>
                </a>
            </li>
        </ul>
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5">
                <div class="flex flex-row items-center h-8">

                    <div class="text-xl font-medium tracking-wide text-gray-900">Profesionales</div>
                </div>
            </li>
            <li>
                <a href="{{ route('people.index') }}"
                    class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4 pr-6">
                    <span class="inline-flex justify-center items-center ml-4"></span>
                    <span class="ml-2 text-lg tracking-wide truncate font-light">Agregar Personal</span>
                </a>
            </li>
        </ul>

        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5">
                <div class="flex flex-row items-center h-8">

                    <div class="text-xl font-medium tracking-wide text-gray-900">Obras Sociales</div>
                </div>
            </li>
            <li>
                <a href="{{ route('datos.index') }}"
                    class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 pr-6 hover:pl-4">
                    <span class="inline-flex justify-center items-center ml-4">
                    </span>
                    <span class="ml-2 text-lg tracking-wide truncate font-light">Agregar Empresa</span>
                </a>
            </li>
        </ul>
         <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5">
                <div class="flex flex-row items-center h-8">

                    <div class="text-xl font-medium tracking-wide text-gray-900">Socios</div>
                </div>
            </li>
            <li>
                <a href="{{ route('admin.user-files') }}"
                    class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                    </span>
                    <span class="ml-2 text-lg tracking-wide truncate font-light">Datos de Socios</span>
                </a>
            </li>
            
        </ul>
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5">
                <div class="flex flex-row items-center h-8">

                    <div class="text-xl font-medium tracking-wide text-gray-900">KineClub</div>
                </div>
            </li>
            <li>
                <a href="{{ route('kine.index') }}"
                    class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                    </span>
                    <span class="ml-2 text-lg tracking-wide truncate font-light">Agregar Beneficio</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4 pr-6"
                        role="menuitem">
                        <span class="ml-2 text-lg tracking-wide truncate text-red-500 font-light">Salir</span>
                        
                    </button>
                </form>
            </li>
        </ul>
        
    </div>
</div>

<script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
