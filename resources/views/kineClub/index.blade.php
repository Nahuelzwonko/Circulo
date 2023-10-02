@extends('master')
@section('titulo', 'KINE CLUB | CKFM')

@section('Encabezado', 'KineClub')
@section('cont', 'Tarjeta de Beneficios Círculo de Kinesiólogos y Fisioterapeutas de Mendoza')
@section('Boton', 'Conocéla')



@section('content')
    {{-- <div class="mt-5 lg:mt-20">
        @include('kineClub.tarjeta')
    </div> --}}

    <section class="text-gray-600 body-font overflow-hidden ">
        <div class="px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="w-full">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        TARJETA DE BENEFICIOS</h1>
                </div>
                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0 flex items-center font-Poppins text-gray-900">
                    <p class="leading-relaxed mb-4">Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos
                        trabajando continuamente para generar beneficios y facilidades para nuestros socios.
                        Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los
                        miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y
                        promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y deporte,
                        indumentaria, estética, salud y bienestar.</p>
                </div>
                <div class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">
                    <img alt="ecommerce" src="{{ asset('storage/png/tarjeta.png') }}">
                </div>
                <div class="w-full mt-6 lg:mt-0 flex justify-start">
                    <button
                        class="bg-[#0051A7] hover:bg-blue-500 text-white text-2xl px-5 py-2 rounded-[10px] ml-auto block w-max mx-auto">
                        <a href="{{ route('asociate.index') }}">Quiero ser parte</a>
                    </button>
                </div>
            </div>
            <div class="px-5 py-24 mx-auto">
                <p
                    class="mb-6 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                    Presentando tu tarjeta y DNI en los locales adheridos podrás acceder a los beneficios y descuentos.
                    ¡Pasa a retirar tu tarjeta por el círculo y súmate a kineclub!</p>
            </div>
        </div>

    </section>
    <section class="w-full h-full flex justify-center items-center ">
        <div class="flex flex-col justify-center items-center ">
            <h1 class="text-black font-hammersmith font-bold text-3xl lg:text-[80px] mb-5">BENEFICIOS KINECLUB</h1>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-4 md:p-2 xl:p-5">
                @foreach ($kines as $kine)
                    <div class="w-full flex justify-center p-5  mx-1  ">
                        <div class="relative group w-[200px] h-[200px] border bg-white rounded-xl shadow-xl">
                            <img class="w-[200px] h-[200px] bg-white object-cover rounded-lg"
                                src="{{ Storage::url($kine->foto) }}" alt="foto" />
                                
                                
                            <div
                                class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 backdrop-filter backdrop-blur">
                                <button data-modal-target="defaultModal{{ $kine->id }}"
                                    data-modal-toggle="defaultModal{{ $kine->id }}"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">Ver descuento</button>
                            </div>
                        </div>
                        <!-- Main modal -->
                        <div id="defaultModal{{ $kine->id }}" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex  items-center justify-center p-4 border-b rounded-t dark:border-gray-600">

                                        <div class="w-full flex justify-center items-center">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                {{ $kine->nombre }}</h3>
                                        </div>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="defaultModal{{ $kine->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>

                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            {!! nl2br($kine->descripcion) !!}</p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="defaultModal{{ $kine->id }}" type="button"
                                            class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
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
