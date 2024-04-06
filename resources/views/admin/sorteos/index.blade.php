@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@section('content')
<div class="py-12">
    <div class="w-[80%] mx-auto sm:px-6 lg:px-8">
        <h1 class="font-hammersmith text-5xl text-center py-8 capitalize"> </h1>
        <h1 class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight  md:text-5xl lg:text-6xl text-white">
            Nuestros <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500 uppercase"> Sorteos</mark>
        </h1>
        <div class="flex justify-end pt-12 pb-6 ">
            <a href="{{ route('admin.sorteos.create') }}" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-lg px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                <div class="flex flex-row items-center justify-center gap-2 ">
                    <p class="fa-solid fa-plus"></p>
                    <p class="font-Poppins">Agregar sorteo</p>
                </div>
            </a>
        </div>
    </div>
    <!-- sorteo 1 -->
    @if ($sorteos->isEmpty())
    <p>No hay sorteos disponibles.</p>
    @else
    @foreach ($sorteos as $sorteo)
    <div class="relative group overflow-hidden p-8 rounded-xl">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <div class="flex w-full justify-center items-center">
                <button type="button" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Inscritos
                    <span class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                        {{ $sorteo->participantes_count }}
                    </span>
                </button>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $sorteo->nombre }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Inicio: {{ $sorteo->inicio }} / Fin {{ $sorteo->fin }}

                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $sorteo->datos }}</p>

                <div class="flex w-full justify-center items-center space-x-4">
                    <a href="{{ route('admin.sorteos.edit', $sorteo->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg focus:outline-none focus:ring-blue-300">
                        Editar
                    </a>
                    <a href="{{ route('admin.sorteos.descargar', $sorteo->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:outline-none focus:ring-blue-300">
                        descargar
                    </a>
                    <form action="{{ route('admin.sorteos.destroy', $sorteo) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:outline-none focus:ring-blue-300">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif


</div>

@endsection