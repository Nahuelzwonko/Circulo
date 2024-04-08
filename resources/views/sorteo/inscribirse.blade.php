@extends('master')
@section('titulo', 'Nuestros Sorteos | CKFM')
@section('Encabezado', 'Estas a nada de participar')
@section('cont', 'Texto texto texto')
@section('Boton', 'Conocénos')
@section('content')
<section>

    <div class="py-16">
        
        
        <form action="{{ route('sorteos.inscribirse', $sorteo->id) }}" method="post" class="max-w-sm mx-auto">
            @csrf
            <div class="mb-5">
                <label for="nombre_sorteo" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre del Sorteo </label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="nombre_sorteo" name="nombre_sorteo" value="{{ $sorteo->nombre }}" readonly>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo Electrónico <span class="text-red-500">*</span></label>
                <input type="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="email" name="email" required placeholder="correo@correo.com">
            </div>
            <div class="mb-5">
                <label for="nombre_apellido" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre y Apellido <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="nombre_apellido" name="nombre_apellido" required placeholder="Nombre y apellido">
            </div>
            <div class="mb-5">
                <label for="numero_matricula" class="block mb-2 text-sm font-medium text-gray-900 ">Número de Matrícula <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="numero_matricula" name="numero_matricula" required placeholder="12345">
            </div>
            <div class="mb-5">
                <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 ">Teléfono <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="telefono" name="telefono" required placeholder="1111111111">
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Numero de telefono sin (+15).</p>
            </div>
            <div class="mb-5">
                <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 ">DNI <span class="text-red-500">*</span></label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="dni" name="dni" required placeholder="11111111">
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Numero de documento sin puntos.</p>
            </div>
            <div class="flex w-full justify-center items-center">
                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Inscribirse</button>

            </div>
        </form>
    </div>
</section>
@include('include.cta')
@include('include.footer')
@endsection