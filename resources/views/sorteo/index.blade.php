@extends('master')
@section('titulo', 'Nuestros Sorteos | CKFM')
@section('Encabezado', 'Descuentos y becas para cursos y capacitaciones')
@section('cont', '')
@section('Boton', 'Conocénos')
@section('content')
<!-- component -->
<section class="mt-20">
    <div class="py-16">
        @if ($sorteos->isEmpty())
        <div class="w-full mx-auto sm:px-6 lg:px-8 mt-20">
            <h1 class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight  md:text-5xl lg:text-6xl text-black">
                No hay sorteos <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500 uppercase"> disponibles</mark>
            </h1>
        </div>
        <div class="mx-auto px-6 max-w-6xl text-gray-500">
            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @else
                @foreach($sorteos as $sorteo)
                <div class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-900">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg" src="{{ asset($sorteo->imagen) }}" alt="" />

                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $sorteo->nombre }}</h5>

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Inicio</b> {{ $sorteo->inicio }} </p>

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $sorteo->datos }}</p>

                            <div class="flex w-full justify-center items-center">
                                <a href="{{ route('sorteos.mostrarFormularioInscripcion', $sorteo->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Inscribirme
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- sorteo 2 -->

                <!-- sorteo 3 -->




            </div>
        </div>
    </div>
</section>
@include('include.cta')
@include('include.footer')
@endsection