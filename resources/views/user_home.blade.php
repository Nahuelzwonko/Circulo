@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')
@section('content')
    <div id="sticky-banner" tabindex="-1"
        class="fixed top-0 left-0 z-50 flex justify-between w-full p-4 border-b border-gray-200 bg-blue-200">
        <div class="flex flex-col items-center mx-auto">
            <p class="flex items-center flex-col   text-sm font-normal text-gray-500 dark:text-gray-400">
            <h2 class="mb-1 text-xl font-semibold text-gray-900 dark:text-white  text-center">🎉¡Activa tu tarjeta!🎉</h2>
            <span>Si ya estas registrado en nuestra web, contas con los beneficios de tu KineClub. Descubri todos los
                beneficios que brindamos. <a href="https://kinesiologosmza.com/user/tarjeta"
                    class="inline font-medium text-blue-600 underline dark:text-blue-500 underline-offset-2 decoration-600 dark:decoration-500 decoration-solid hover:no-underline">Activar
                    tarjeta</a></span>
            </p>
        </div>
        <div class="flex items-center">
            <button data-dismiss-target="#sticky-banner" type="button"
                class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close banner</span>
            </button>
        </div>
    </div>
    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-black">
                    EL CÍRCULO NOS UNE</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    ¡Bienvenido(a) {{ $username }} al nuevo sistema web del Círculo de Kinesiólogos y Fisioterapeutas de
                    Mendoza!

                    Aquí encontrarás herramientas y recursos para mejorar tu experiencia como miembro. Explora, conéctate y
                    disfruta de esta nueva plataforma.</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="https://kinesiologosmza.com/user/tarjeta"
                        class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" version="1.1" id="Layer_1"
                            x="0px" y="0px" viewBox="0 0 122.88 78.22" xml:space="preserve" path="#000">
                            <g>
                                <path style="background: blue"
                                    d="M86.63,45.01c3.23,0,6.1,1.56,7.89,3.96c1.79-2.41,4.66-3.96,7.89-3.96c5.43,0,9.83,4.4,9.83,9.83 c0,5.43-4.4,9.83-9.83,9.83c-3.23,0-6.1-1.56-7.89-3.96c-1.79,2.41-4.66,3.96-7.89,3.96c-5.43,0-9.83-4.4-9.83-9.83 C76.8,49.41,81.2,45.01,86.63,45.01L86.63,45.01z M6.76,0h109.36c1.86,0,3.55,0.76,4.77,1.98c1.22,1.22,1.98,2.92,1.98,4.77v64.7 c0,1.86-0.76,3.55-1.98,4.77c-1.22,1.22-2.91,1.99-4.77,1.99H6.76c-1.86,0-3.55-0.76-4.77-1.98C0.76,75.01,0,73.32,0,71.46V6.76 C0,4.9,0.76,3.21,1.98,1.98C3.21,0.76,4.9,0,6.76,0L6.76,0z M16.66,51.66c-1.08,0-1.96-0.88-1.96-1.96c0-1.08,0.88-1.96,1.96-1.96 h32.95c1.08,0,1.96,0.88,1.96,1.96c0,1.08-0.88,1.96-1.96,1.96H16.66L16.66,51.66z M16.66,61.94c-1.08,0-1.96-0.88-1.96-1.96 c0-1.08,0.88-1.96,1.96-1.96h22.23c1.08,0,1.96,0.88,1.96,1.96c0,1.08-0.88,1.96-1.96,1.96H16.66L16.66,61.94z M3.91,14.56h115.05 v-7.8c0-0.78-0.32-1.49-0.84-2.01c-0.52-0.52-1.23-0.84-2.01-0.84H6.76c-0.78,0-1.49,0.32-2.01,0.84C4.23,5.27,3.91,5.98,3.91,6.76 V14.56L3.91,14.56z M118.97,33.99H3.91v37.47c0,0.78,0.32,1.49,0.84,2.01c0.52,0.52,1.23,0.84,2.01,0.84h109.36 c0.78,0,1.49-0.32,2.01-0.84c0.52-0.52,0.84-1.23,0.84-2.01V33.99L118.97,33.99z" />
                            </g>
                        </svg><span>Mi </span><span class="text-orange-400">Kine</span><span
                            class="text-blue-400">Club</span>
                    </a>
                    <a href="https://kinesiologosmza.com/user/consultorio"
                        class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-4 h-4 mr-2" clip-rule="evenodd" viewBox="0 0 442 512.08">
                            <path
                                d="M100.46 40.14h43.25C146.47 17.51 164.73 0 186.89 0c22.02 0 40.19 17.27 43.13 39.67l43.89.47a4.78 4.78 0 0 1 4.79 4.8v52.81c0 2.65-2.14 4.79-4.79 4.79h-173.4c-2.61 0-4.8-2.14-4.8-4.79V44.94c-.04-2.67 2.1-4.8 4.75-4.8zM225.93 425.8c-5.56 0-10.07-4.51-10.07-10.07 0-5.56 4.51-10.07 10.07-10.07H366.3c5.56 0 10.07 4.51 10.07 10.07 0 5.56-4.51 10.07-10.07 10.07H225.93zm0-66.12c-5.56 0-10.07-4.51-10.07-10.07 0-5.56 4.51-10.07 10.07-10.07H366.3c5.56 0 10.07 4.51 10.07 10.07 0 5.56-4.51 10.07-10.07 10.07H225.93zm0-66.12c-5.56 0-10.07-4.51-10.07-10.07 0-5.56 4.51-10.07 10.07-10.07H366.3c5.56 0 10.07 4.51 10.07 10.07 0 5.56-4.51 10.07-10.07 10.07H225.93zm-41.06-106.42h222.49c9.5 0 18.15 3.91 24.42 10.17 6.31 6.28 10.22 14.96 10.22 24.47v255.66c0 9.5-3.91 18.18-10.19 24.45-6.28 6.28-14.95 10.19-24.45 10.19H184.87c-9.5 0-18.18-3.9-24.46-10.18l-.59-.64c-5.92-6.21-9.59-14.62-9.59-23.82V221.78c0-9.53 3.9-18.2 10.17-24.47s14.94-10.17 24.47-10.17zm222.49 20.14H184.87c-3.98 0-7.61 1.64-10.23 4.26-2.63 2.63-4.27 6.26-4.27 10.24v255.66c0 3.79 1.48 7.26 3.87 9.85l.4.37c2.64 2.64 6.27 4.28 10.23 4.28h222.49c3.95 0 7.58-1.65 10.21-4.28 2.64-2.64 4.29-6.26 4.29-10.22V221.78c0-3.96-1.65-7.59-4.28-10.23a14.372 14.372 0 0 0-10.22-4.27zm-298.61 246.3c5.56 0 10.07 4.51 10.07 10.07 0 5.56-4.51 10.07-10.07 10.07H40.16c-10.95 0-21.02-4.54-28.33-11.85C4.55 454.63 0 444.6 0 433.56V102.88c0-11.05 4.51-21.1 11.78-28.37l.63-.57c7.22-6.93 17.02-11.21 27.75-11.21H72.6v20.15H40.16c-5.3 0-10.14 2.08-13.73 5.45l-.4.43c-3.63 3.62-5.89 8.63-5.89 14.12v330.68c0 5.46 2.28 10.45 5.91 14.08 3.63 3.68 8.65 5.94 14.11 5.94h68.59zM301.8 62.73h32.43c11.03 0 21.04 4.54 28.31 11.8 7.31 7.31 11.86 17.38 11.86 28.35v33.61c0 5.56-4.51 10.07-10.07 10.07-5.56 0-10.07-4.51-10.07-10.07v-33.61c0-5.47-2.26-10.48-5.89-14.1-3.63-3.63-8.64-5.9-14.14-5.9H301.8V62.73zM186.39 20.54c12.53 0 22.68 10.15 22.68 22.68 0 12.52-10.15 22.68-22.68 22.68-12.52 0-22.68-10.16-22.68-22.68 0-12.53 10.16-22.68 22.68-22.68z" />
                        </svg>
                        Consultorio virtual
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('storage/user/principal.png') }}" alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->

    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Herramientas y
                        recursos diseñados para facilitar tu experiencia</h2>
                    <p class="mb-8 font-light lg:text-xl">Te
                        brindamos
                        un entorno digital, moderno y accesible, donde puedas acceder a
                        información relevante, participar en eventos y
                        capacitaciones, y conectarte con colegas de la industria.</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Atiende y
                                realiza fichas medicas a tus pacientes.
                            </span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Realiza
                                consultas y sesiones de rehabilitación en línea, brindando seguimiento efectivo a tus
                                pacientes. </span>
                        </li>

                    </ul>
                    <p class="mb-8 font-light lg:text-xl">Si todavia no conoces tu lugar para realizar fichas para tus
                        pacientes conoce tu <a class="text-blue-500 text-lg font-semibold"
                            href="https://kinesiologosmza.com/user/consultorio">¡Consultorio
                            virtual!</a></p>
                </div>
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('storage/user/user.png') }}"
                    alt="dashboard feature image">
            </div>
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('storage/user/tarjeta.png') }}"
                    alt="feature image 2">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">🎉¡Tu KineClub
                        ahora es digital!🎉
                    </h2>
                    <p class="mb-8 font-light lg:text-xl">
                        Disfrutá de una experiencia única y aprovechá al máximo tu membresía en el Círculo de Kinesiólogos y
                        Fisioterapeutas de Mendoza.
                        <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Promociones
                                actualizadas</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Descuentos
                                exclusivos</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Acceso fácil y
                                rápido</span>
                        </li>

                    </ul>
                    <p class="font-light lg:text-xl">Si todavias no activas tu KineClub digital hacelo aca en 2 simples
                        pasos <a class="text-blue-500 text-lg font-semibold" href="">¡Activar!</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div
            class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-purple-600 dark:text-purple-500">Quienes somos</p>
                <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                    Nuestra misión y visión</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Nuestra tarea principal es negociar
                    convenios colectivos de prestación con obras sociales, mutuales y prepagas en nombre y representación de
                    sus socios, buscando aumentar continuamente los aranceles. <br>
                    Asimismo, estamos en la constante búsqueda para generar un espacio de pertenencia, unión y consenso
                    entre los profesionales para lograr un crecimiento conjunto basado en la solidaridad y formación
                    profesional.
                </p>
                <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                    <div>
                        <a href="https://www.kinesiologosmza.com/quienes"
                            class="inline-flex items-center text-base font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                            Conocenos mas
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">

                <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                        </path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Convenios</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Negociación de convenios colectivos.</p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Servicios</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Servicios modernos y procedimientos
                        sistematizados.
                    </p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Socios</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Prestamos beneficios y facilidades para nuestros
                        socios.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
            <figure class="max-w-screen-md mx-auto">
                <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                        fill="currentColor" />
                </svg>
                <blockquote>
                    <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"Te invitamos a explorar y
                        descubrir todas las funcionalidades que este nuevo sistema web tiene para ti.
                        ¡Nos enorgullece tenerte como parte de nuestra comunidad en esta nueva era digital!
                        ¡Bienvenido {{ $username }} y que disfrutes de esta nueva experiencia!

                        "</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                   
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Pini Maria Laura</div>
                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Presidente - CKFM</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">¡Estemos siempre conectados!</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Desde el círculo de Kinesiólogos y fisioterapeutas, nos importas. Por eso, estamos a tu disposición.</p>
                <a href="https://www.kinesiologosmza.com/contacto"
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Hablemos</a>
            </div>
        </div>
    </section>

    @include('users.include.footer')
@endsection
