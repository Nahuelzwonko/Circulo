@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')

@section('content')

    <section class="text-gray-600 body-font bg-dash-bg-resp bg-contain lg:bg-dash-bg lg:bg-contain bg-repeat-y">
        <div
            class="w-full flex justify-between bg-dash-head-resp bg-contain bg-no-repeat lg:bg-dash-head lg:bg-cover lg:h-[400px] lg:bg-no-repeat">
            <h1
                class="text-2xl md:text-6xl uppercase title-font text-[#5068E1] entrance lg:self-center ml-8 mt-14 lg:ml-36 lg:mt-32 tracking-[0.5rem">
                Bienvenido <br><span class="font-bold pl-10lg:text-7xl">{{ $username }}</span> </h1>
            <img src="{{ asset('storage/logo/logowhite.svg') }}"
                class="w-[25%] h-[40%] lg:h-auto lg:w-[15%] mr-8 mt-3 lg:mt-20 lg:mr-28" alt="">

        </div>


        <div class="container lg:px-5 lg:py-24 mx-auto mt-16 lg:mt-20">
            <div class="flex flex-col justify-start text-center w-full mb-12">

                <p
                    class="text-2xl lg:text-5xl text-slate-800 font-medium mb-10 leading-normal mx-auto lg:w-[95%] font-hammersmith">
                    ¡Bienvenido(a) al nuevo sistema web del Círculo de Kinesiólogos y Fisioterapeutas de Mendoza!</p>
                <p class="lg:w-[80%] mx-auto leading-loose lg:text-3xl font-monserrat"> Aquí encontrarás herramientas y
                    recursos para mejorar tu
                    experiencia como miembro. Explora, conéctate y disfruta de esta nueva plataforma.</p>
                <div class="lg:mt-0 lg:flex-shrink-0">
                    <div class="mt-12 inline-flex">
                        <button type="button"
                            class="text-white font-monserrat bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-xl px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Seguir
                            leyendo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container lg:px-5 mt-8 lg:py-24 mx-auto">
            <div class="text-center mb-10 lg:mb-48">
                <h1 class="text-2xl lg:text-5xl lg:w-[75%] mx-auto font-hammersmith title-font text-gray-900 mb-10">
                    Herramientas y recursos
                    diseñados para facilitar tu experiencia</h1>
                <p class="text-base lg:text-3xl font-monserrat leading-relaxed lg:w-[70%] mx-auto text-gray-500 mb-8">Te
                    brindamos
                    un entorno <span class="font-medium text-indigo-500 lg:text-3xl">digital, moderno <span
                            class="text-gray-500 lg:text-2xl font-normal">y </span> accesible</span>, donde puedas acceder a
                    información relevante, participar en eventos y
                    capacitaciones, y conectarte con colegas de la industria.
                </p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="grid grid-cols-1 mx-auto content-center items-center lg:gap-40">

                <div class="p-4 w-[80%] mx-auto flex flex-col text-center items-center">
                    <h2
                        class="text-gray-900 text-3xl lg:text-7xl py-4 my-4 title-font font-bold font-hammersmith mb-8 focus-in-expand from-slate-200 via-sky-500 to-slate-800 bg-gradient-to-r bg-clip-text text-transparent">
                        KineClub Digital</h2>
                    <a href="{{ route('tarjeta') }}">
                        <div
                            class=" float-1 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-20 mt-12 flex-shrink-0">
                            <img class=" rounded w-full object-cover object-center mb-6"
                                src="{{ asset('storage/card/tarjeta.png') }}" alt="content">
                        </div>
                        <div class="flex-grow">

                            <ul
                                class="flex flex-col gap-4 list-disc leading-relaxed lg:text-3xl font-monserrat text-justify">
                                <li>Tu KineClub ahora es digital!</li>
                                <li>Disfrutá de una experiencia única y aprovechá al máximo tu membresía en el Círculo de
                                    Kinesiólogos y Fisioterapeutas de Mendoza.</li>

                            </ul>
                        </div>
                    </a>
                </div>
                <div class="p-4 w-[80%] mx-auto flex flex-col text-center items-center">
                    <h2
                        class="text-gray-900 text-3xl lg:text-7xl py-4 my-4 font-hammersmith title-font font-bold mb-8 focus-in-expand from-slate-200 via-sky-500 to-slate-800 bg-gradient-to-l bg-clip-text text-transparent">
                        Consultorio Virtual</h2>
                    <a href="{{ route('consultorio') }}">
                        <div
                            class=" float-2 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-20 mt-12 flex-shrink-0">
                            <img class=" rounded w-full object-cover object-center mb-6"
                                src="{{ asset('storage/card/consultorio.png') }}" alt="content">
                        </div>
                        <div class="flex-grow">

                            <ul
                                class="flex flex-col gap-4 list-disc leading-relaxed lg:text-3xl font-monserrat text-justify">
                                <li>Atiende y da terapia a tus pacientes de forma remota, desde la comodidad de tu propio
                                    espacio.</li>
                                <li>Realiza consultas y sesiones de rehabilitación en línea, brindando seguimiento efectivo
                                    a tus pacientes.</li>


                            </ul>
                        </div>
                    </a>
                </div>
                <div class="p-4 w-[80%] mx-auto flex flex-col text-center items-center">
                    <h2
                        class="text-gray-900 text-3xl lg:text-7xl py-4 my-4 title-font font-hammersmith font-bold mb-8 focus-in-expand from-slate-200 via-sky-500 to-slate-800 bg-gradient-to-br bg-clip-text text-transparent">
                        Agenda Virtual</h2>
                    <a href="{{ route('getevent') }}">
                        <div
                            class=" float-3 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-20 mt-12 flex-shrink-0">
                            <img class=" rounded w-full object-cover object-center mb-6"
                                src="{{ asset('storage/card/calendar.png') }}" alt="content">
                        </div>
                        <div class="flex-grow">

                            <ul
                                class="flex flex-col gap-4 list-disc leading-relaxed lg:text-3xl font-monserrat text-justify">
                                <li>
                                    Tu Agenda Virtual, una herramienta innovadora
                                    para organizar tus actividades y citas de manera eficiente.
                                </li>
                                <li>
                                    Programá y gestioná tus horarios de
                                    atención, con recordatorios para citas y eventos importantes.
                                </li>
                            </ul>

                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container lg:px-5 py-24 mx-auto">
            <div class="xl:w-[70%] lg:w-3/4 w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8"
                    viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                <p class="leading-relaxed lg:text-2xl font-monserrat">Te invitamos a explorar y descubrir todas las
                    funcionalidades que este
                    nuevo sistema web tiene para ti.
                    <br>
                    ¡Nos
                    enorgullece tenerte como parte de nuestra comunidad en esta nueva era digital! <br>
                    <span class="font-bold">¡Bienvenido {{ $username }} y que disfrutes de esta nueva
                        experiencia!</span>

                </p>
                <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-8 mb-6"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-xl font-monserrat">CKFM</h2>
                <p class="text-gray-500 text-xl font-monserrat"> Presidente Pini Maria Laura</p>
            </div>
        </div>
    </section>


    @include('users.include.footer')
@endsection
