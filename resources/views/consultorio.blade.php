@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')
@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">

                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Mi <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Consultorio
                        Virtual</span></h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Bienvenido a tu consultorio
                    virtual. <br>
                    En este consultorio vas a poder realizar fichas kinesicas.

                </p>
            </div>
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">¿Que puedo realizar en mi consultorio virtual?
                </h1>
                
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Iniciar</h2>
                        <p class="leading-relaxed text-base">Considera implementar un sistema de fichas electrónicas para llevar un control más eficiente de las fichas de tus pacientes. Esto te permitirá acceder a ellas desde cualquier dispositivo con acceso a internet y también hacer actualizaciones de manera fácil y rápida.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Descargar</h2>
                        <p class="leading-relaxed text-base">En lugar de guardar copias físicas de las fichas de tus pacientes, puedes crear fichas digitales y guardarlas en una carpeta organizada en tu computadora o en una plataforma de almacenamiento en la nube. Esto te permitirá acceder a ellas desde cualquier dispositivo sin necesidad de tener las fichas impresas.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Editar</h2>
                        <p class="leading-relaxed text-base">Al editar las fichas de tus pacientes en línea, puedes guardarlas en formato digital en tu computadora o en algún servicio en la nube. Podrás acceder a ellas en cualquier momento y actualizarlas según sea necesario, lo que te permitirá llevar un control efectivo de tus pacientes sin necesidad de imprimir fichas en papel.</p>
                    </div>
                </div>
            </div>
            <div class="w-full flex">
                <a href="{{ route('ficha-kinesica') }}"
                    class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Realizar
                    ficha</a>
            </div>
        </div>
    </section>
    @include('users.include.footer')
@endsection
