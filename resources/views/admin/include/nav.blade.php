
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white uppercase">administrador</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>

                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">
                                            Salir
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="logo-sidebar"
        class="bg-gradient-to-r from-indigo-300 to-gray-500 fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[url] border-r shadow-2xl border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class=" bg-gradient-to-l from-white to-gray-300 h-full shadow-2xl px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5">
                    <div class="flex flex-row gap-2 items-center h-8">
                        
                        <div class="text-xl font-medium tracking-wide text-gray-900">Noticias</div>
                    </div>
                </li>
                <li>
                    <a href="{{route('posts.index')}}"
                        class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 pr-6 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4">
                        <span class="inline-flex justify-center items-center ml-4"></span>
                        <span class="ml-2 text-lg tracking-wide truncate">Agregar Noticia</span>
                    </a>
                </li>
            </ul> 
            <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                           
                            <div class="text-xl font-medium tracking-wide text-gray-900">Personal Asociado</div>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('people.index')}}"
                            class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4 pr-6">
                            <span class="inline-flex justify-center items-center ml-4"></span>
                            <span class="ml-2 text-lg tracking-wide truncate">Agregar Personal</span>
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
                    <a href="{{route('datos.index')}}"
                        class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 pr-6 hover:pl-4">
                        <span class="inline-flex justify-center items-center ml-4">
                        </span>
                        <span class="ml-2 text-lg tracking-wide truncate">Agregar Empresa</span>
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
                    <a href="{{route('kine.index')}}"
                        class="relative flex flex-row items-center h-11  text-gray-600 hover:text-gray-800 border-l-2 border-transparent hover:border-indigo-500 transition-all hover:bg-gray-300 hover:rounded-r-3xl duration-500 hover:pl-4 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                        </span>
                        <span class="ml-2 text-lg tracking-wide truncate">Agregar Beneficio</span>
                    </a>
                </li>
            </ul>




        </div>
    </aside>
    <script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
    