@extends('master')
@section('titulo', 'KINE CLUB | CKFM')

@section('Encabezado', 'KineClub')
@section('cont', 'Tarjeta de Beneficios Círculo de Kinesiólogos y Fisioterapeutas de Mendoza')
@section('Boton', 'Conocéla')



@section('content')
<section class="text-gray-600 body-font overflow-hidden ">
    <div class="px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="w-full">
                <h1 class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    TARJETA DE BENEFICIOS</h1>
            </div>
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0 flex flex-col justify-center items-center font-Poppins text-gray-900">
                <p class="leading-relaxed mb-4 text-center">Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos
                    trabajando continuamente para generar beneficios y facilidades para nuestros socios. Para seguir
                    sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del
                    CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos
                    y servicios de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud
                    y bienestar.</p>
                <div class="w-full mt-6 lg:mt-0 text-center">
                    <button class="bg-[#0051A7] hover:bg-blue-500 text-white  px-5 py-2 rounded-[10px] mx-auto">
                        <a href="{{ route('asociate.index') }}">Quiero ser parte</a>
                    </button>
                </div>
            </div>
            <div class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">
                <img alt="ecommerce" src="{{ asset('storage/png/tarjeta.png') }}">
            </div>
        </div>
    </div>
    <div class="px-5 py-24 mx-auto">
        <p class="mb-6 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
            Presentando tu tarjeta y DNI en los locales adheridos podrás acceder a los beneficios y descuentos.
            ¡Pasa a retirar tu tarjeta por el círculo y súmate a kineclub!</p>
    </div>
</section>
<section class="w-full h-full flex justify-center items-center ">
    <div class="flex flex-col justify-center items-center ">
        <h1 class="text-black font-hammersmith font-bold text-3xl lg:text-[80px] mb-5">BENEFICIOS KINECLUB</h1>
        <div class="grid grid-cols-1 justify-center sm:grid-cols-2 lg:grid-cols-4 w-full mt-10 ">
            @foreach ($kines as $kine)
            <div class="w-full flex justify-center p-5  mx-1  ">
                <div class="relative group w-[200px] h-[200px] border bg-white rounded-xl shadow-xl">
                    <img class="w-[200px] h-[200px] bg-white object-cover rounded-lg" src="{{ Storage::url($kine->foto) }}" alt="foto" />
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 backdrop-filter backdrop-blur">
                        <button data-modal-target="defaultModal{{ $kine->id }}" data-modal-toggle="defaultModal{{ $kine->id }}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Ver descuento</button>
                    </div>
                </div>
                <!-- Main modal -->
                <div id="defaultModal{{ $kine->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex  items-center justify-center p-4 border-b rounded-t dark:border-gray-600">

                                <div class="w-full flex justify-center items-center">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ $kine->nombre }}
                                    </h3>
                                </div>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal{{ $kine->id }}">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>

                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    {!! nl2br($kine->descripcion) !!}</p>
                            </div>
                            <div class="flex justify-center items center m-5">
                                <!-- Facebook -->
                                @if($kine->facebook_url)
                                <a href="{{ $kine->facebook_url }}" target="_blank" class="mb-2 m-2 inline-block rounded bg-[#1877f2] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                        </svg>
                                    </span>
                                </a>
                                @else
                                <a href="#" class="mb-2 m-2 inline-block rounded bg-gray-400 px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md cursor-not-allowed" disabled>
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                        </svg>
                                    </span>
                                </a>
                                @endif


                                <!-- Instagram -->
                                @if($kine->instagram_url)
                                <a href="{{ $kine->instagram_url }}" target="_blank" class="mb-2 m-2 inline-block rounded bg-[#c13584] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </span>
                                </a>
                                @else

                                <a href="#" class="mb-2 m-2 inline-block rounded bg-gray-400 px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md cursor-not-allowed" disabled>
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </span>
                                </a>
                                @endif

                                <!-- X -->
                                @if($kine->twitter_url)
                                <a href="{{ $kine->twitter_url }}" target="_blank" class="mb-2 m-2 inline-block rounded bg-black px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                        </svg>
                                    </span>
                                </a>
                                @else
                                <a href="#" class="mb-2 m-2 inline-block rounded bg-gray-400 px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md cursor-not-allowed" disabled>
                                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                        </svg>
                                    </span>
                                </a>
                                @endif
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="defaultModal{{ $kine->id }}" type="button" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- @include('kineClub.beneficios') --}}
@include('include.cta')
@include('include.footer')
@endsection