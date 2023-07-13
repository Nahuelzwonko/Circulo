@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')

@section('content')
    <div class="w-full flex justify-center mt-5">
        <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
    </div>
    <div class="flex flex-col text-center w-full mb-12">

        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Editar evaluacion de paciente
        </h1>

        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
            asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
            bun deep.</p>
    </div>

    <form action="{{ route('evaluacion-kinesica.update', $evaluacion->id) }}" method="POST"
        class="max-w-3xl mx-auto bg-gray-100 border-[1px] border-gray-400 shadow-md rounded  px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PATCH')

        <div class="relative z-0 w-full mb-6 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nombre">Nombre
                completo:</label>
            <input
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                type="text" id="nombre" name="nombre" value="{{ $evaluacion->nombre }}" required>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="edad">Edad:</label>
            <input
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                type="number" id="edad" name="edad" value="{{ $evaluacion->edad }}" required>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="genero">Género:</label>
            <select id="genero" name="genero" required
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value="masculino" {{ $evaluacion->genero === 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="femenino" {{ $evaluacion->genero === 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ $evaluacion->genero === 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="direccion">Dirección:</label>
                <input
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    type="text" id="direccion" name="direccion" value="{{ $evaluacion->direccion }}" required>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="telefono">Teléfono:</label>
                <input
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    type="tel" id="telefono" name="telefono" value="{{ $evaluacion->telefono }}" required>
            </div>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="contacto">Datos de
                contacto:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="contacto" name="contacto" rows="4" required>{{ $evaluacion->contacto }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="motivo">Motivo de
                consulta:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="motivo" name="motivo" rows="4" required>{{ $evaluacion->motivo }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="historia">Historia
                clínica:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="historia" name="historia" rows="4" required>{{ $evaluacion->historia }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="evaluacion">Evaluación
                inicial:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="evaluacion" name="evaluacion" rows="4" required>{{ $evaluacion->evaluacion }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="examen">Examen
                físico:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="examen" name="examen" rows="4" required>{{ $evaluacion->examen }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                for="diagnostico">Diagnóstico:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="diagnostico" name="diagnostico" rows="4" required>{{ $evaluacion->diagnostico }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="objetivos">Objetivos de
                tratamiento:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="objetivos" name="objetivos" rows="4" required>{{ $evaluacion->objetivos }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="plan">Plan de
                tratamiento:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="plan" name="plan" rows="4" required>{{ $evaluacion->plan }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="seguimiento">Seguimiento y
                evolución:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="seguimiento" name="seguimiento" rows="4" required>{{ $evaluacion->seguimiento }}</textarea>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="conclusiones">Conclusiones y
                recomendaciones:</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="conclusiones" name="conclusiones" rows="4" required>{{ $evaluacion->conclusiones }}</textarea>
        </div>
        <div class="flex items-center justify-center mt-6">
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer"
                type="submit">Guardar cambios</button>
        </div>
    </form>
    @include('users.include.footer')
@endsection
