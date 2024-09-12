@extends('layout')
@section('title', 'Inicio | CKFM')
@section('content')
@include('include.header')
{{-- carru --}}
<div class="swiper my-6 md:my-10 lg:mt-16 lg:mb-24">
    <div class="swiper-wrapper flex">
        <div class="swiper-slide lg:my-6 md:my-10 flex flex-row justify-around lg:gap-24">
            <img src="{{ asset('storage/clients/logo-omint.svg') }}" alt="client logo" class="sm:w-1/5" width="100px">
            <img src="{{ asset('storage/clients/logo-avalian.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-swiss.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-dasuten.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-SCIS.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">

        </div>
        <div class="swiper-slide lg:my-6 md:my-10 flex flex-row justify-around lg:gap-24 ">
            <img src="{{ asset('storage/clients/logo-amffa.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-damsu.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-elevar.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-hope.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">

        </div>
        <div class="swiper-slide lg:my-6 md:my-10 flex flex-row justify-around lg:gap-24">
            <img src="{{ asset('storage/clients/logo-jerarquicos.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-opdea.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-OSADEF.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-OSDIPP.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">

        </div>
        <div class="swiper-slide lg:my-6 md:my-10 flex flex-row justify-around lg:gap-24">
            <img src="{{ asset('storage/clients/logo-osjera.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-OSPJN.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-OSPPRE.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-OSSEG.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">

        </div>
        <div class="swiper-slide lg:my-6 md:my-10 flex flex-row justify-around lg:gap-24">
            <img src="{{ asset('storage/clients/logo-prevencion.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-rural.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-sadaic.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-sancor.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">

        </div>
        <div class="swiper-slide lg:my-6 md:my-10 flex flex-row justify-around lg:gap-24">
            <img src="{{ asset('storage/clients/logo-union.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-medicus.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">
            <img src="{{ asset('storage/clients/logo-IOSFA.svg') }}" alt="client logo" class=" sm:w-1/5" width="100px">
            <img src="{{ asset('storage/clients/logo-pasteur.svg') }}" alt="client logo" class=" sm:w-1/5 " width="100px">

        </div>
    </div>
</div>
{{-- About us --}}
<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class=" gap-4 mt-8">
            <img class="w-[100%] rounded-lg" src="{{ asset('storage/png/imagen.png') }}" alt="office content 1">
        </div>
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl text-center font-extrabold text-gray-900 dark:text-white">¿Quíenes Somos?</h2>
            <p class="mb-4 text-left">Somos una asociación civil que agrupa a profesionales kinesiólogos,
                fisioterapeutas,
                terapistas
                físicos y licenciados en kinesiología. Nuestra tarea principal es generar convenios
                colectivos de
                prestación con las obras sociales, mutuales y prepagas en nombre y representación de
                nuestros socios
                buscando el aumento continuo de los aranceles.</p>
            <div class="flex justify-center w-full">
                <button class=" font-Poppins invisible lg:visible text-sm  bg-[#0051A7] hover:bg-blue-700 text-white px-5  py-2 rounded-[10px] "><a href="{{ route('quienes.index') }}">Saber Más</a></button>
            </div>
        </div>

    </div>
</section>

{{-- Se parte de CKFM --}}
{{-- <div
        class="space-y-6 justify-between text-gray-600 flex sm:flex-col-reverse lg:flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center mt-8 lg:mt-0">
        <button class=" visible lg:invisible bg-[#0051A7] hover:bg-blue-500 text-white text-2xl py-8 mb-8 mt-0"><a
                href="../quienes/index.blade.php">Quiero Ser Parte</a></button>
        <div class="md:4/10 lg:w-1/2 flex justify-center pb-8 lg:pb-0">
            <img class="w-[90%]" src="{{ 'storage/png/imagen2.png' }}" alt="image" width="" height=""
class="w-full">
<div class=""></div>
</div>
<div class=" md:7/12 lg:w-1/2">
    <h2 class=" text-3xl text-center font-bold text-black md:text-5xl font-hammersmith">
        Se parte del C.K.F.M
    </h2>
    <div class="flex justify-center">
        <p class=" font-Poppins w-[80%] my-8 sm:mb-0 lg:mb-8  text-gray-600 text-justify lg:text-xl">
            En C.K.F.M, contamos con un equipo altamente capacitado de kinesiólogos y fisioterapeutas comprometidos
            con la salud física de nuestros pacientes. Con técnicas innovadoras, brindamos soluciones integrales y
            personalizadas. Si eres un profesional en estas áreas y compartes nuestra pasión por la excelencia en el
            cuidado de la salud, te invitamos a unirte a nuestro círculo y trabajar con nosotros para ayudar a más
            personas a recuperar su bienestar.
        </p>
    </div>
    <div class="flex justify-center w-full ">
        <button class="invisible lg:visible fade-in bounce-top-icons bg-[#0051A7] hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] font-Poppins "><a href="../quienes/index.blade.php">Quiero ser parte</a></button>
    </div>
</div>

</div> --}}
{{-- be part --}}
<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl text-center font-extrabold text-gray-900 dark:text-white">Se parte del C.K.F.M
            </h2>
            <p class="mb-4 text-right"> En C.K.F.M, contamos con un equipo altamente capacitado de kinesiólogos y
                fisioterapeutas comprometidos
                con la salud física de nuestros pacientes. Con técnicas innovadoras, brindamos soluciones integrales y
                personalizadas. Si eres un profesional en estas áreas y compartes nuestra pasión por la excelencia en el
                cuidado de la salud, te invitamos a unirte a nuestro círculo y trabajar con nosotros para ayudar a más
                personas a recuperar su bienestar.</p>
            <div class="flex justify-center w-full ">
                <button class="invisible lg:visible fade-in text-sm bg-[#0051A7] hover:bg-blue-700 text-white px-5  py-2 rounded-[10px] font-Poppins "><a href="../quienes/index.blade.php">Quiero ser parte</a></button>
            </div>
        </div>
        <div class=" gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{ 'storage/png/imagen2.png' }}" alt="office content 1">

        </div>
    </div>
</section>
@include('include.cta2')
{{-- kine --}}
<div class="hidden lg:block lg:visible lg:w-[full] lg:h-[110vh] fade-in  ">
    <div style="  background-image: url(../public/storage/fondo/kinefondo.svg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: 70%;" class=" w-full h-full flex justify-center items-center rounde">
        <div class="w-[60%] h-[60%] rounded-[20px] glass1">
            <div class="flex">
                <div class="w-1/2">
                    <img src="{{ asset('storage/kineclub/kineclub.svg') }}" alt="Tarjetakineclub" class="w-full h-full object-cover" />
                </div>
                <div class="w-1/2 py-4">
                    <div class="flex justify-center font-hammersmith">
                        <h1 class=" text-[50px] font-bold text-[#F28F1C]">KINE</h1>
                        <h1 class="text-[50px] font-bold text-white">CLUB</h1><br>
                    </div>
                    <div class="flex justify-center text-white font-Poppins text-justify px-8 text-lg">
                        <p>Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando
                            continuamente para generar beneficios y facilidades para nuestros socios.
                            Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para
                            los miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos
                            y promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y
                            deporte, indumentaria, estética, salud y bienestar.</p>
                    </div>
                    <div class="flex justify-center w-full mt-10 ">
                        <button class=" bg-[#0051A7] hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] "><a href="{{ route('kine.index') }}" class="font-Poppins">Quiero mi KineClub</a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class=" lg:hidden lg:w-0 lg:h-0 flex flex-col w-[95%] md:w-4/5 bg-[#3D3D3E] rounded-[40px] mx-auto items-center">
    <h1 class="mt-12 mb-9 font-bold"><span class="text-[#F28F1C] text-[2.5rem] md:text-[4rem]">KINE</span><span class="text-[#546EF3] text-[2.5rem] md:text-[4rem]">CLUB</span></h1>
    <p class="text-white text-justify px-5 md:px-12 md:leading-8">
        Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando continuamente para generar
        beneficios y facilidades para nuestros socios.
        Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del
        CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos y servicios
        de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud y bienestar.
    </p>
    <div class="my-6">
        <img class="skew-x-[10deg] absolute z-0 left-20 md:left-60 w-3/12" src="{{ asset('storage/png/geometric/rectangle.svg') }}" alt="">

        <img class="z-[3] relative" src="{{ asset('storage/kineclub/kineclub.svg') }}" alt="Tarjetakineclub" />
    </div>
    <button class=" w-full bg-[#0051A7] hover:bg-blue-500 text-white text-2xl py-8 rounded-br-[40px] rounded-bl-[40px] mt-8 "><a href="../quienes/index.blade.php">La Quiero!</a></button>
</div>

{{-- Se parte de CKFM --}}
<div class="hidden lg:flex lg:visible w-full h-[150vh]  justify-center items-center ">
    <div class=" space-y-6 justify-between items-center text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
        <div class="md:4/10 lg:w-1/2 flex justify-end m-0">
            <img class="w-[80%] " src="{{ asset('storage/png/imagen3.svg') }}" alt="image" loading="lazy" width="" height="" class="w-full">
        </div>
        <div class=" md:7/12 lg:w-1/2">
            <h2 class="text-3xl text-center font-bold text-black md:text-5xl font-hammersmith">
                El circulo te conecta
            </h2>
            <div class="flex justify-center">
                <p class=" w-[80%] my-8 text-gray-600 font-Poppins text-justify text-xl ">
                    En C.K.F.M, contamos con un equipo altamente capacitado de kinesiólogos y fisioterapeutas
                    comprometidos con la salud física de nuestros pacientes. Con técnicas innovadoras, brindamos
                    soluciones integrales y personalizadas. Si eres un profesional en estas áreas y compartes nuestra
                    pasión por la excelencia en el cuidado de la salud, te invitamos a unirte a nuestro círculo y
                    trabajar con nosotros para ayudar a más personas a recuperar su bienestar
                </p>
            </div>
            <div class="flex justify-center w-full ">
                <button class="fade-in bounce-top-icons bg-[#0051A7] hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] "><a href="../quienes/index.blade.php">Conocer</a></button>
            </div>
        </div>
    </div>
</div>

<div class=" lg:hidden lg:w-0 lg:h-0 flex flex-col  mx-auto items-center">
    <h1 class="mt-32 mb-9 font-bold text-3xl">El círculo te conecta</h1>
    <p class="text-black-400 text-justify px-5 md:px-12 md:leading-8">
        En C.K.F.M, contamos con un equipo altamente capacitado de kinesiólogos y fisioterapeutas comprometidos con la
        salud física de nuestros pacientes. Con técnicas innovadoras, brindamos soluciones integrales y personalizadas.
        Si eres un profesional en estas áreas y compartes nuestra pasión por la excelencia en el cuidado de la salud, te
        invitamos a unirte a nuestro círculo y trabajar con nosotros para ayudar a más personas a recuperar su
        bienestar.
    </p>
    <div class="my-6">
        <div class="my-6">
            <img class="w-[75%] z-10 relative" src="{{ asset('storage/png/imagen3.svg') }}" alt="image">
        </div>
    </div>
    <button class=" font-Poppins w-full bg-[#0051A7] hover:bg-blue-500 text-white text-2xl py-8 mt-8 "><a href="../quienes/index.blade.php">Conocer</a></button>
</div>
<!-- anuncio de sorteo -->
<div id="bottom-banner" tabindex="-1" class="fixed bottom-0 start-0 z-50 flex justify-between w-full p-4  bg-blue-600 ">
    <div class="flex items-center mx-auto">
        <p class="flex w-full items-center text-sm font-normal text-white">
            <span>¿Ya conoces nuestros descuentos y becas para cursos y capacitaciones?</span>
            <a href="{{ route('sorteo.index') }}" class="flex items-center ml-1 text-sm font-medium text-white md:ml-2 md:inline-flex hover:underline">
                Conocer
                <svg class="w-3 h-3 ml-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </p>

    </div>
    <div class="flex items-center">
        <button data-dismiss-target="#bottom-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-white hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close banner</span>
        </button>
    </div>
</div>
<!-- fin anuncio de sorteo -->
@include('include.cta')
@include('include.footer')

@endsection