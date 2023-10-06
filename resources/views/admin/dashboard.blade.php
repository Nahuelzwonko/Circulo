@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">{{ $cantidadUsuarios }}</p>
                <p>Usuarios</p>
            </div>
        </div>
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            </div>
            <div class="text-right">
                <p class="text-2xl"></p>
                <p>NaN</p>
            </div>
        </div>
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">

            </div>
            <div class="text-right">
                <p class="text-2xl"></p>
                <p>NaN</p>
            </div>
        </div>
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">

            </div>
            <div class="text-right">
                <p class="text-2xl"></p>
                <p>NaN</p>
            </div>
        </div>
    </div>
    <!-- ./Statistics Cards -->

    <!-- Task Summaries -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
        <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Resúmenes de tareas de sprints recientes(Dev)</h3>
        </div>
        <div class="md:col-span-2 xl:col-span-1">
            <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                <div class="flex justify-between py-1 text-black dark:text-white">
                    <h3 class="text-sm font-semibold">Tareas en POR HACER</h3>
                    <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                    </svg>
                </div>
                <div class="text-sm text-black dark:text-gray-50 mt-2">


                    <div
                        class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                        No se encuntran tareas por realizar.</div>
                </div>
            </div>
        </div>
        <div>
            <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                <div class="flex justify-between py-1 text-black dark:text-white">
                    <h3 class="text-sm font-semibold">Tareas en DESARROLLO</h3>
                    <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                    </svg>
                </div>
                <div class="text-sm text-black dark:text-gray-50 mt-2">
                    <div
                        class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                        No se encuntran tareas por realizar.</div>
                </div>
            </div>
        </div>
        <div>
            <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                <div class="flex justify-between py-1 text-black dark:text-white">
                    <h3 class="text-sm font-semibold">Tareas en QA</h3>
                    <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                    </svg>
                </div>
                <div class="text-sm text-black dark:text-gray-50 mt-2">

                    <div
                        class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                        Eliminar código de análisis</div>


                </div>
            </div>
        </div>
    </div>
    <!-- ./Task Summaries -->


    <!-- Contact Form -->
    <div class="mt-8 mx-4">
        <div class="w-full flex justify-center items-center">
            <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg text-center">
                <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Ponete en <span
                        class="text-[#b4ff00]">contacto
                </h1></span>
                <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2 text-center">
                    Cuando tengas un problema no dudes en contactarte <br> con los desarrolladores.</p>

                <div class="flex items-center justify-center mt-8 text-gray-600 dark:text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">Primitivo de la Reta 635, Mendoza Cdad.</div>
                </div>

                <div class="flex items-center justify-center mt-4 text-gray-600 dark:text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">+54 9 261 306-5988</div>
                </div>

                <div class="flex items-center justify-center mt-4 text-gray-600 dark:text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">contacto@codehuit.com</div>
                </div>
            </div>


        </div>
    </div>
    <!-- ./Contact Form -->
    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Desarrollado <a href="https://codehuit.com/" class="font-bold">CODE<span class="text-[#b4ff]">HUIT</span></a></p>

    </div>
    </div>
    </div>
@endsection
