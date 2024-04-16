@extends('master')
@section('titulo', 'Nuestros Sorteos | CKFM')
@section('Encabezado', 'Estas a nada de participar')
@section('cont', '')
@section('Boton', 'Conocénos')
@section('content')
<section>
    @if(session('error'))
    <div id="alert-additional-content-2" class="p-4 mb-4 mt-40 text-red-800 border border-red-300 rounded-lg bg-red-50  " role="alert">
        <div class="flex items-center justify-center">
            <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <h3 class="text-lg font-medium">{{ session('error') }}</h3>
        </div>
        <div class="flex justify-center mt-4">
            <a href="{{route('sorteo.index')}}" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center ">
                Volver
            </a>
        </div>
    </div>
    @else
    <div class="py-16 mt-20 ">
        <form action="{{ route('sorteos.inscribirse', $sorteo->id) }}" method="post" class="max-w-sm mx-auto mt-40">
            @csrf
            <!-- nombre del sorteo -->
            <div class="mb-5">
                <label for="nombre_sorteo" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre del Sorteo </label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="nombre_sorteo" name="nombre_sorteo" value="{{ $sorteo->nombre }}" readonly>
            </div>
            <!-- nombre y apellido -->
            <div class="mb-5">
                <label for="nombre_apellido" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre y Apellido <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="nombre_apellido" name="nombre_apellido" required placeholder="Nombre y apellido">
            </div>
            <!-- dni -->
            <div class="mb-5">
                <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 ">DNI <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="dni" name="dni" required placeholder="11111111">
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Numero de documento sin puntos.</p>
            </div>
            <!-- telefono -->
            <div class="mb-5">
                <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 ">Teléfono <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="telefono" name="telefono" required placeholder="1111111111">
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Numero de telefono sin (+15).</p>
            </div>
            <!-- email -->
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo Electrónico <span class="text-red-500">*</span></label>
                <input type="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="email" name="email" required placeholder="correo@correo.com">
            </div>
            <!-- numero de matricula -->
            <div class="mb-5">
                <label for="numero_matricula" class="block mb-2 text-sm font-medium text-gray-900 ">Número de Matrícula <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="numero_matricula" name="numero_matricula" required placeholder="12345">
            </div>


            <div class="flex w-full justify-center items-center">
                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Inscribirse</button>

            </div>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

        </form>
    </div>
    @endif
</section>
@include('include.cta')
@include('include.footer')
@endsection