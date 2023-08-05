@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')
@section('content')
    @if (session('success'))
        <div id="alert-border-3"
            class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-300 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <section class="text-gray-600 body-font ">
        <div class="w-full flex justify-center mt-5">
            <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
        </div>
        <div class="w-full bg-layer-1 p-6 text-center md:p-20">
            <div class="mx-auto w-full max-w-6xl">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-center text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Mis <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">ARCHIVOS
                        PERSONALES</span></h1>

                <div class="w-full flex justify-center items-center">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="block text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Editar mis datos
                    </button>
                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Editar mis archivos</h3>

                                <form action="{{ route('user-files.update') }}" class="space-y-6" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    {{-- CV --}}
                                    <div class="mb-4">
                                        <label for="cv_pdf" class="block text-gray-800 font-medium mb-1">
                                            (Currículum Vitae)</label>
                                        <input type="file" name="cv_pdf" id="cv_pdf" accept=".pdf"
                                            class="border rounded px-3 py-2 w-full">
                                        @error('cv_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- DNI IMAGEN --}}
                                    <div class="mb-4">
                                        <label for="dni_image" class="block text-gray-800 font-medium mb-1">
                                            (Imagen DNI)</label>
                                        <input type="file" name="dni_image" id="dni_image" accept=".pdf"
                                            class="border rounded px-3 py-2 w-full">
                                        @error('dni_image')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- titulo_universitario_pdf --}}
                                    <div class="mb-4">
                                        <label for="titulo_universitario_pdf" class="block text-gray-800 font-medium mb-1">
                                            (PDF)</label>
                                        <input type="file" name="titulo_universitario_pdf" id="titulo_universitario_pdf"
                                            accept=".pdf" class="border rounded px-3 py-2 w-full">
                                        @error('titulo_universitario_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- titulo_posgrado_pdf --}}
                                    <div class="mb-4">
                                        <label for="titulo_posgrado_pdf" class="block text-gray-800 font-medium mb-1">
                                            (Titulo Posgrado)</label>
                                        <input type="file" name="titulo_posgrado_pdf" id="titulo_posgrado_pdf"
                                            accept=".pdf" class="border rounded px-3 py-2 w-full">
                                        @error('titulo_posgrado_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- matricula_provincial_pdf --}}
                                    <div class="mb-4">
                                        <label for="matricula_provincial_pdf" class="block text-gray-800 font-medium mb-1">
                                            (Matricula Provincial)</label>
                                        <input type="file" name="matricula_provincial_pdf" id="matricula_provincial_pdf"
                                            accept=".pdf" class="border rounded px-3 py-2 w-full">
                                        @error('matricula_provincial_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- constancia_ingresos_brutos_pdf --}}
                                    <div class="mb-4">
                                        <label for="constancia_ingresos_brutos_pdf"
                                            class="block text-gray-800 font-medium mb-1">
                                            (Constancia ingresos brutos)</label>
                                        <input type="file" name="constancia_ingresos_brutos_pdf"
                                            id="constancia_ingresos_brutos_pdf" accept=".pdf"
                                            class="border rounded px-3 py-2 w-full">
                                        @error('constancia_ingresos_brutos_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- constancia_cuit_pdf --}}
                                    <div class="mb-4">
                                        <label for="constancia_cuit_pdf" class="block text-gray-800 font-medium mb-1">
                                            (Constancia cuit)</label>
                                        <input type="file" name="constancia_cuit_pdf" id="constancia_cuit_pdf"
                                            accept=".pdf" class="border rounded px-3 py-2 w-full">
                                        @error('constancia_cuit_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- certificado_inscripcion_superintendencia_salud_pdf --}}
                                    <div class="mb-4">
                                        <label for="certificado_inscripcion_superintendencia_salud_pdf"
                                            class="block text-gray-800 font-medium mb-1">
                                            (Inscripcion superintendencia salud)</label>
                                        <input type="file" name="certificado_inscripcion_superintendencia_salud_pdf"
                                            id="certificado_inscripcion_superintendencia_salud_pdf" accept=".pdf"
                                            class="border rounded px-3 py-2 w-full">
                                        @error('certificado_inscripcion_superintendencia_salud_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- poliza_seguro_mala_praxis_pdf --}}
                                    <div class="mb-4">
                                        <label for="poliza_seguro_mala_praxis_pdf"
                                            class="block text-gray-800 font-medium mb-1">
                                            (Seguro mala praxis)</label>
                                        <input type="file" name="poliza_seguro_mala_praxis_pdf"
                                            id="poliza_seguro_mala_praxis_pdf" accept=".pdf"
                                            class="border rounded px-3 py-2 w-full">
                                        @error('poliza_seguro_mala_praxis_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- habilitacion_consultorio_pdf --}}
                                    <div class="mb-4">
                                        <label for="habilitacion_consultorio_pdf"
                                            class="block text-gray-800 font-medium mb-1">
                                            (Habilitacion consultorio)</label>
                                        <input type="file" name="habilitacion_consultorio_pdf"
                                            id="habilitacion_consultorio_pdf" accept=".pdf"
                                            class="border rounded px-3 py-2 w-full">
                                        @error('habilitacion_consultorio_pdf')
                                            <p class="text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit"
                                            class="bg-indigo-700 hover:bg-indigo-800 text-white font-semibold px-4 py-2 rounded">Guardar
                                            cambios</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto w-5/6 md:w-2/3 h-full mt-10">
                    @if ($userFiles)
                        {{-- cv --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-center text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Currículum Vitae</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->cv_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->cv_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- DNI --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold"> DNI
                                    </h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->dni_image)
                                    <a href="{{ asset('storage/' . $userFiles->dni_image) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{--  Título Universitario --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Título
                                        Universitario</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->titulo_universitario_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->titulo_universitario_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Títulode posgrado --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Título
                                        Posgrado</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->titulo_posgrado_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->titulo_posgrado_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Matrícula Provincial  --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Matrícula
                                        Provincial</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->matricula_provincial_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->matricula_provincial_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Constancia Ingresos Brutos  --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Constancia Ingresos Brutos </h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->constancia_ingresos_brutos_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->constancia_ingresos_brutos_pdf) }}"
                                        download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Constancia de CUIT  --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Constancia de CUIT</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->constancia_cuit_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->constancia_cuit_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Inscripción en la Superintendencia de la Salud  --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Inscripción en la Superintendencia de la Salud</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->certificado_inscripcion_superintendencia_salud_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->certificado_inscripcion_superintendencia_salud_pdf) }}"
                                        download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Póliza de Seguro de Mala Praxis --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Póliza de
                                        Seguro de Mala Praxis</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->poliza_seguro_mala_praxis_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->poliza_seguro_mala_praxis_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                        {{-- Habilitación del Consultorio  --}}
                        <div
                            class="bg-blue-100 mb-5 dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                            <div class="flex w-full justify-center">
                                <div class="ml-2">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-gray-800 dark:text-gray-100 text-sm font-bold">
                                        Habilitación del Consultorio</h2>
                                </div>
                            </div>
                            <div>
                                @if ($userFiles->habilitacion_consultorio_pdf)
                                    <a href="{{ asset('storage/' . $userFiles->habilitacion_consultorio_pdf) }}" download
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:bg-indigo-500 hover:bg-indigo-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-indigo-700 dark:hover:bg-indigo-700 transition duration-150 ease-in-out  dark:bg-indigo-600 rounded text-white px-6 py-2 text-sm">Descargar</a>
                                @else
                                    <span class="text-xs text-red-600">No cargado <a
                                            href="{{ route('user-files.create') }}">
                                            <span class="text-blue-500 font-semibold">CARGAR</span></a></span>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>

    </section>

@endsection
