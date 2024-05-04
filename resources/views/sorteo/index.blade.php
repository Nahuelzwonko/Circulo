@extends('master')
@section('titulo', 'Nuestros Sorteos | CKFM')
@section('Encabezado', 'Descuentos y becas para cursos y capacitaciones')
@section('cont', '')
@section('Boton', 'Conocénos')
@section('content')
<!-- component -->
<section class="mt-40">
    <div class="py-16">
        @if(session('success'))
        <div class="w-full flex justify-center items-center">
            <div class="p-4 mb-4 text-sm text-white-800 rounded-lg bg-green-300 " role="alert">
                <span class="font-medium">¡Felicitaciones!</span> {{ session('success') }}
            </div>
        </div>
        @endif
        @php
        $sorteosActivos = $sorteos->where('estado', 'activo');
        $sorteosFinalizados = $sorteos->where('estado', 'finalizado');
        @endphp
        @if ($sorteosActivos->isEmpty() && $sorteosFinalizados->isEmpty())
        <div class="w-full mx-auto sm:px-6 lg:px-8 mt-20">
            <h1 class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight  md:text-5xl lg:text-6xl text-black">
                No hay sorteos <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500 uppercase"> disponibles</mark>
            </h1>
        </div>
        @else
        <div class="mx-auto px-6 max-w-6xl text-gray-500">
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach($sorteosActivos as $sorteo)
                <div class="relative group overflow-hidden bg-white border border-gray-200 rounded-lg shadow">
                    <img class="w-full h-64 object-cover rounded-t-lg" src="{{asset ($sorteo->imagen) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-gray-900">{{ $sorteo->nombre }}</h5>
                        <p class="mb-3 text-sm sm:text-base font-normal text-gray-700"><b>Día del sorteo:</b> {{ $sorteo->fin }}</p>
                        <p class="mb-3 text-sm sm:text-base font-normal text-gray-700">{!! nl2br($sorteo->datos) !!}</p>
                        <div class="flex justify-center">
                            @if ($sorteo->estado === 'activo')
                            <a href="{{ route('sorteos.mostrarFormularioInscripcion', $sorteo->id) }}" class="inline-block px-4 py-2 text-xs sm:text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Inscribirme
                            </a>
                            @else
                            <button class="inline-block px-4 py-2 text-xs sm:text-sm font-medium text-white bg-gray-400 rounded-lg cursor-not-allowed" disabled>
                                Finalizado
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($sorteosFinalizados as $sorteo)
                <div class="relative group overflow-hidden bg-white border border-gray-200 rounded-lg shadow">
                    <img class="w-full h-64 object-cover rounded-t-lg" src="{{asset ($sorteo->imagen) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-gray-900">{{ $sorteo->nombre }}</h5>
                        <p class="mb-3 text-sm sm:text-base font-normal text-gray-700"><b>Día del sorteo:</b> {{ $sorteo->fin }}</p>
                        <p class="mb-3 text-sm sm:text-base font-normal text-gray-700">{!! nl2br($sorteo->datos) !!}</p>
                        <div class="flex justify-center">
                            <button class="inline-block px-4 py-2 text-xs sm:text-sm font-medium text-white bg-gray-400 rounded-lg cursor-not-allowed" disabled>
                                Finalizado
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@include('include.cta')
@include('include.footer')
@endsection