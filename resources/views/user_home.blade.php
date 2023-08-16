@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')

@section('content')

    <section class="text-gray-600 body-font ">
        <div class="w-full flex justify-center mt-5">
            <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
        </div>
        <div class="container px-5 py-24 mx-auto mt-20">
            <div class="flex flex-col text-center w-full mb-12">
                <div class=" py-4 bg-slate-700 mb-8 rounded-3xl bg-gradient-to-l from-slate-50 via-indigo-500 to-slate-50">
                    <h1 class="text-3xl md:text-6xl font-medium title-font text-white entrance">Bienvenido {{ $username }}</h1>
                </div>
                
                <p class="text-3xl text-slate-700 font-medium mb-4 ">¡Bienvenido(a) al nuevo sistema web del Círculo de Kinesiólogos y Fisioterapeutas de Mendoza!</p>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base lg:text-2xl"> Aquí encontrarás herramientas y recursos para mejorar tu
                    experiencia como miembro. Explora, conéctate y disfruta de esta nueva plataforma.</p>
                <div class="lg:mt-0 lg:flex-shrink-0">
                    <div class="mt-12 inline-flex">
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-xl px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Seguir
                            leyendo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="text-3xl lg:text-4xl lg:w-[80%] mx-auto font-medium title-font text-gray-900 mb-8">Herramientas y recursos
                    diseñados para facilitar tu experiencia</h1>
                <p class="text-base lg:text-2xl leading-relaxed w-[65%] mx-auto text-gray-500 mb-8">Te brindamos
                    un entorno <span class="font-medium text-indigo-500 text-3xl">digital, moderno <span class="text-gray-500 text-2xl font-normal">y </span> accesible</span>, donde puedas acceder a información relevante, participar en eventos y
                    capacitaciones, y conectarte con colegas de la industria.
                </p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:flex-row sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
              
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class=" inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <img class=" rounded w-full object-cover object-center mb-6"
                            src="{{ asset('storage/card/tarjeta.png') }}" alt="content">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">KineClub Digital</h2>
                        <p class="leading-relaxed text-base">Nueva trajeta Kine Club digital. Con esta tarjeta, podrás
                            disfrutar de una experiencia única y aprovechar al máximo tu membresía en el Círculo de
                            Kinesiólogos y Fisioterapeutas de Mendoza..</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class=" inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <img class=" rounded w-full object-cover object-center mb-6"
                            src="{{ asset('storage/card/consultorio.png') }}" alt="content">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Consultorio virtual</h2>
                        <p class="leading-relaxed text-base">El Consultorio Virtual te permite atender y dar terapia a tus
                            pacientes de forma remota, desde la comodidad de tu propio espacio. Realiza consultas y sesiones
                            de rehabilitación en línea, brindando seguimiento efectivo a tus pacientes.</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class=" inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <img class=" rounded w-full object-cover object-center mb-6"
                            src="{{ asset('storage/card/calendar.png') }}" alt="content">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Agenda Digital</h2>
                        <p class="leading-relaxed text-base">Descubre nuestra Agenda Digital, una herramienta innovadora
                            para organizar tus actividades y citas de manera eficiente. Programa y gestiona tus horarios de
                            atención, con recordatorios para citas y eventos importantes.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8"
                    viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                <p class="leading-relaxed text-lg">Te invitamos a explorar y descubrir todas las funcionalidades que este
                    nuevo sistema web tiene para ti. Estamos seguros de que encontrarás herramientas útiles y recursos
                    valiosos que contribuirán a tu crecimiento personal y profesional.

                    Una vez más, te damos la bienvenida al Círculo de Kinesiólogos y Fisioterapeutas de Mendoza, donde la
                    pasión por la kinesiología se encuentra con el compromiso de mejorar la calidad de vida. ¡Nos
                    enorgullece tenerte como parte de nuestra comunidad en esta nueva era digital! <br>
                    <span class="font-bold">¡Bienvenido {{ $username }} y que disfrutes de esta nueva
                        experiencia!</span>

                </p>
                <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-8 mb-6"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">CKFM</h2>
                <p class="text-gray-500"> Presidente Pini Maria Laura</p>
            </div>
        </div>
    </section>


    @include('users.include.footer')
@endsection
