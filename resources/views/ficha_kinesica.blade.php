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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('ficha-kinesica') }}" method="POST"
                class="max-w-3xl mx-auto bg-gray-100 border-[1px] border-gray-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <h2 class="text-2xl font-bold mb-6 text-center">HISTORIA CLINICA</h2>

                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Nombre completo profesional --}}
                    <div class="relative w-full mb-6 group">
                        <label for="nombre_profesional"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo
                            profesional:</label>
                        <input type="text" id="nombre_profesional" name="nombre_profesional" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>

                    {{-- Nombre completo paciente --}}
                    <div class="relative w-full mb-6 group">
                        <label for="nombre_paciente"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo
                            paciente:</label>
                        <input type="text" id="nombre_paciente" name="nombre_paciente" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Edad --}}
                    <div class="relative w-full mb-6 group">
                        <label for="edad"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad:</label>
                        <input type="number" id="edad" name="edad" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>

                    {{-- Obra social --}}
                    <div class="relative w-full mb-6 group">
                        <label for="obra_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obra
                            social:</label>
                        <input type="text" id="obra_social" name="obra_social" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Teléfono particular --}}
                    <div class="relative w-full mb-6 group">
                        <label for="telefono_particular"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono
                            particular:</label>
                        <input type="tel" id="telefono_particular" name="telefono_particular" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>

                    {{-- Teléfono celular --}}
                    <div class="relative w-full mb-6 group">
                        <label for="telefono_celular"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono celular:</label>
                        <input type="tel" id="telefono_celular" name="telefono_celular" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Fecha de nacimiento --}}
                    <div class="relative w-full mb-6 group">
                        <label for="fecha_nacimiento"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de
                            nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>

                    {{-- DNI --}}
                    <div class="relative w-full mb-6 group">
                        <label for="dni"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI:</label>
                        <input type="text" id="dni" name="dni" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                {{-- Domicilio y localidad --}}
                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Domicilio --}}
                    <div class="relative w-full mb-6 group">
                        <label for="domicilio"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domicilio:</label>
                        <input type="text" id="domicilio" name="domicilio" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>

                    {{-- Localidad --}}
                    <div class="relative w-full mb-6 group">
                        <label for="localidad"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localidad:</label>
                        <input type="text" id="localidad" name="localidad" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                {{-- Profesional derivante y MAT --}}
                <div class="grid md:grid-cols-2 md:gap-6">
                    {{-- Profesional derivante --}}
                    <div class="relative w-full mb-6 group">
                        <label for="profesional_derivante"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesional
                            derivante:</label>
                        <input type="text" id="profesional_derivante" name="profesional_derivante" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>

                    {{-- MAT --}}
                    <div class="relative w-full mb-6 group">
                        <label for="mat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MAT:</label>
                        <input type="text" id="mat" name="mat" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    </div>
                </div>

                {{-- Profesión/Ocupación --}}
                <div class="relative w-full mb-6 group">
                    <label for="profesion_ocupacion"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesión/Ocupación:</label>
                    <input type="text" id="profesion_ocupacion" name="profesion_ocupacion" required
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                </div>

                <h2 class="text-2xl font-bold mb-6 text-center uppercase">Antecedentes personales</h2>

                {{-- Checkbox de antecedentes personales --}}
                <div class="w-full border border-gray-300">
                    <div class="grid mb-8 shadow-sm md:mb-12 md:grid-cols-2">
                        <figure class="flex flex-col items-start justify-start p-8 text-center bg-white">
                            {{-- Tensión arterial --}}
                            <div class="flex items-center mb-2">
                                <input id="tension_arterial" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="tension_arterial"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tensión
                                    Arterial</label>
                            </div>

                            {{-- Diabetes --}}
                            <div class="flex items-center mb-2">
                                <input id="diabetes" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="diabetes"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Diabetes</label>
                            </div>

                            {{-- Fumador --}}
                            <div class="flex items-center mb-2">
                                <input id="fumador" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="fumador"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fumador</label>
                            </div>

                            {{-- Cardiaco --}}
                            <div class="flex items-center mb-2">
                                <input id="cardiaco" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="cardiaco"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cardiaco</label>
                            </div>

                            {{-- Cirrosis --}}
                            <div class="flex items-center mb-2">
                                <input id="cirrosis" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="cirrosis"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cirrosis</label>
                            </div>

                            {{-- Artrosis --}}
                            <div class="flex items-center mb-2">
                                <input id="artrosis" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="artrosis"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Artrosis</label>
                            </div>

                            {{-- Artritis --}}
                            <div class="flex items-center mb-2">
                                <input id="artritis" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="artritis"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Artritis</label>
                            </div>

                            {{-- Reumatoidea --}}
                            <div class="flex items-center mb-2">
                                <input id="reumatoidea" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="reumatoidea"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reumatoidea</label>
                            </div>
                        </figure>

                        <figure class="flex flex-col items-start justify-start p-8 text-center">
                            {{-- Hemiplejías --}}
                            <div class="flex items-center mb-2">
                                <input id="hemiplejias" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="hemiplejias"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hemiplejías</label>
                            </div>

                            {{-- Asma --}}
                            <div class="flex items-center mb-2">
                                <input id="asma" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="asma"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asma</label>
                            </div>

                            {{-- Chagas --}}
                            <div class="flex items-center mb-2">
                                <input id="chagas" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-700 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="chagas"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chagas</label>
                            </div>

                            {{-- Marcapsos --}}
                            <div class="flex items-center mb-2">
                                <input id="marcapsos" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="marcapsos"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Marcapsos</label>
                            </div>

                            {{-- Reemplazo de Cadera Derecha --}}
                            <div class="flex items-center mb-2">
                                <input id="reemplazo_cadera_derecha" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="reemplazo_cadera_derecha"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reemplazo de Cadera
                                    Derecha</label>
                            </div>

                            {{-- Usa prótesis --}}
                            <div class="flex items-center mb-2">
                                <input id="usa_protesis" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="usa_protesis"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usa prótesis</label>
                            </div>

                            {{-- Reemplazo de Cadera Izquierda --}}
                            <div class="flex items-center mb-2">
                                <input id="reemplazo_cadera_izquierda" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="reemplazo_cadera_izquierda"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reemplazo de Cadera
                                    Izquierda</label>
                            </div>
                        </figure>
                    </div>
                </div>

                {{-- Otros --}}
                <div class="relative w-full mb-10 group">
                    <label for="otros"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otros:</label>
                    <div class="w-full flex justify-center mb-10">
                        <textarea id="otros" name="otros" rows="4" required
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>

                {{-- Antecedentes familiares --}}
                <div class="relative w-full mb-6 group">
                    <label for="antecedentes_familiares"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Antecedentes
                        familiares:</label>
                    <textarea id="antecedentes_familiares" name="antecedentes_familiares" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>

                {{-- Motivo de consulta --}}
                <div class="relative w-full mb-6 group">
                    <label for="plan_tratamiento"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Motivo de consulta:</label>
                    <textarea id="plan_tratamiento" name="plan_tratamiento" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>

                {{-- Diagnóstico médico --}}
                <div class="relative w-full mb-6 group">
                    <label for="diagnostico_ingreso"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnóstico médico:</label>
                    <textarea id="diagnostico_ingreso" name="diagnostico_ingreso" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>

                {{-- Objetivos --}}
                <div class="relative w-full mb-6 group">
                    <label for="objetivos_tratamiento"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Objetivos:</label>
                    <textarea id="objetivos_tratamiento" name="objetivos_tratamiento" rows="4" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Guardar</button>
                </div>
            </form>

        </div>
    </section>
    @include('users.include.footer')
@endsection
