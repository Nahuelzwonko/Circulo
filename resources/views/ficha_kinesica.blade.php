@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
<div class=" relative ">
@include('users.include.nav')
</div>

@section('content')
    <section class="text-gray-600 body-font relative z-0">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Ficha de evaluación kinesica</h1>
            </div>

            <form  action="{{ route('evaluacion-kinesica.store') }}" method="POST"
                class="max-w-3xl mx-auto bg-gray-100 border-[1px] border-gray-400 shadow-md rounded   px-8 pt-6 pb-8 mb-4">
                @csrf
                
                <h2 class="text-2xl font-bold mb-6 text-center">Datos del paciente:</h2>
                {{-- nombre completo --}}
                <div class="relative  w-full mb-6 group">
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                        completo:</label>
                    <input type="text" id="nombre" name="nombre" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                {{-- datos del contacto --}}
                <div class="relative  w-full mb-10 group">
                    <label for="contacto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Datos
                        de contacto:</label>
                    <div class="w-full flex justify-center mb-10">
                        <textarea id="contacto" name="contacto" rows="4" required
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>
                {{-- edad --}}
                <div class="relative  w-full mb-6 group">
                    <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad:</label>
                    <input type="number" id="edad" name="edad" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>
                {{-- genero --}}
                <div class="mb-4">
                    <label for="genero"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Género:</label>
                    <select id="genero" name="genero" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                {{-- grupo --}}
                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Direccion --}}
                    <div class="relative  w-full mb-6 group">
                        <label for="direccion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                    {{-- Telefono --}}
                    <div class="relative  w-full mb-6 group">
                        <label for="telefono"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                
                {{--  --}}
                <div class="relative  w-full mb-6 group">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motivo de consulta:</label>
                    <textarea id="motivo" name="motivo" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Historia clínica:</label>
                    <textarea id="historia" name="historia" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Evaluación inicial:</label>
                    <textarea id="evaluacion" name="evaluacion" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Examen físico:</label>
                    <textarea id="examen" name="examen" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnóstico:</label>
                    <textarea id="diagnostico" name="diagnostico" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Objetivos de tratamiento:</label>
                    <textarea id="objetivos" name="objetivos" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plan de tratamiento:</label>
                    <textarea id="plan" name="plan" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seguimiento y evolución:</label>
                    <textarea id="seguimiento" name="seguimiento" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        message</label>
                    <textarea id="conclusiones" name="conclusiones" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                {{--  --}}
                <div class="flex items-center justify-center mt-6">
                    <input type="submit" value="Enviar"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
                </div>
            </form>
        </div>
    </section>
    @include('users.include.footer')
@endsection
