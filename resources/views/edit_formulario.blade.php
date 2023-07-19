@extends('users.layouts.template')
@section('title', 'Editar Formulario')

@section('content')
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Editar Formulario</h1>
        </div>
        <div class="w-full max-w-lg mx-auto">
            <form action="{{ route('formulario.update', $formulario->id) }}" method="post">
                @csrf
                @method('PUT')
                
                {{-- Aquí muestra los campos del formulario que deseas editar --}}
                <!-- Nombre completo profesional -->
                <div class="relative w-full mb-6 group">
                    <label for="nombre_profesional" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo profesional:</label>
                    <input type="text" id="nombre_profesional" name="nombre_profesional" required value="{{ $formulario->nombre_profesional }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Nombre completo paciente -->
                <div class="relative w-full mb-6 group">
                    <label for="nombre_paciente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo paciente:</label>
                    <input type="text" id="nombre_paciente" name="nombre_paciente" required value="{{ $formulario->nombre_paciente }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Edad -->
                <div class="relative w-full mb-6 group">
                    <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad:</label>
                    <input type="number" id="edad" name="edad" required value="{{ $formulario->edad }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Obra social -->
                <div class="relative w-full mb-6 group">
                    <label for="obra_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obra social:</label>
                    <input type="text" id="obra_social" name="obra_social" required value="{{ $formulario->obra_social }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Teléfono particular -->
                <div class="relative w-full mb-6 group">
                    <label for="telefono_particular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono particular:</label>
                    <input type="tel" id="telefono_particular" name="telefono_particular" required value="{{ $formulario->telefono_particular }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Teléfono celular -->
                <div class="relative w-full mb-6 group">
                    <label for="telefono_celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono celular:</label>
                    <input type="tel" id="telefono_celular" name="telefono_celular" required value="{{ $formulario->telefono_celular }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Fecha de nacimiento -->
                <div class="relative w-full mb-6 group">
                    <label for="fecha_nacimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required value="{{ $formulario->fecha_nacimiento }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- DNI -->
                <div class="relative w-full mb-6 group">
                    <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI:</label>
                    <input type="text" id="dni" name="dni" required value="{{ $formulario->dni }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Domicilio -->
                <div class="relative w-full mb-6 group">
                    <label for="domicilio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domicilio:</label>
                    <input type="text" id="domicilio" name="domicilio" required value="{{ $formulario->domicilio }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Localidad -->
                <div class="relative w-full mb-6 group">
                    <label for="localidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localidad:</label>
                    <input type="text" id="localidad" name="localidad" required value="{{ $formulario->localidad }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Profesional derivante -->
                <div class="relative w-full mb-6 group">
                    <label for="profesional_derivante" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesional derivante:</label>
                    <input type="text" id="profesional_derivante" name="profesional_derivante" required value="{{ $formulario->profesional_derivante }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- MAT -->
                <div class="relative w-full mb-6 group">
                    <label for="mat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MAT:</label>
                    <input type="text" id="mat" name="mat" required value="{{ $formulario->mat }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                <!-- Profesión/Ocupación -->
                <div class="relative w-full mb-6 group">
                    <label for="profesion_ocupacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesión/Ocupación:</label>
                    <input type="text" id="profesion_ocupacion" name="profesion_ocupacion" required value="{{ $formulario->profesion_ocupacion }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>

                <!-- Resto de los campos del formulario -->

                <div class="flex justify-center">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
