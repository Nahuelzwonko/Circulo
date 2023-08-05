@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@include('admin.include.nav')
@section('content')

    <div id="alert-1"
        class="flex items-center justify-center p-4 mb-4 text-center text-blue-800 rounded-lg bg-blue-200 dark:bg-gray-800 dark:text-blue-400"
        role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="flex justify-center">
<div class="ml-3 text-sm font-medium text-center ">
           Todos los datos que se visualizan en esta pagina pertenecen a dicho socio y estan actualizado
        </div>
        </div>
        
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    <div class="flex w-full justify-center">
        <div class="w-full max-w-2xl px-4">
            <div class="border rounded-lg  pb-6 border-gray-200 dark:border-gray-700 ">
                <div
                    class="flex items-center  text-center border-b border-gray-200 dark:border-gray-700  justify-center px-6 py-3">
                    @foreach ($userFiles as $userFile)
                        <p tabindex="0"
                            class="focus:outline-none  text-center text-sm lg:text-xl font-semibold leading-tight text-gray-800 dark:text-white ">
                            Archivos de {{ $userFile->nombre_apellido }}</p>
                    @endforeach

                </div>
                <div class="px-6 pt-6 overflow-x-auto">
                    <ol>
                        @foreach ($userFiles as $userFile)
                            <li>
                                <ul>
                                    @if ($userFile->dni_image)
                                        <li><a href="{{ asset('storage/' . $userFile->dni_image) }}" target="_blank"><span class="text-blue-600">Descargar</span>
                                                Imagen de DNI</a></li>
                                    @endif
                                    <li><a href="{{ asset('storage/' . $userFile->cv_pdf) }}" target="_blank"> <span
                                                class="text-blue-600">Descargar</span> CV</a>
                                    </li>

                                    @if ($userFile->titulo_universitario_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->titulo_universitario_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span> Título
                                                Universitario</a></li>
                                    @endif

                                    @if ($userFile->titulo_posgrado_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->titulo_posgrado_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span> Título de
                                                Posgrado</a></li>
                                    @endif
                                    @if ($userFile->matricula_provincial_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->matricula_provincial_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span>
                                                matricula_provincial_pdf</a></li>
                                    @endif
                                    @if ($userFile->constancia_cuit_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->constancia_cuit_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span>
                                                constancia_cuit_pdf</a></li>
                                    @endif
                                    @if ($userFile->certificado_inscripcion_superintendencia_salud_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->certificado_inscripcion_superintendencia_salud_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span>
                                                certificado_inscripcion_superintendencia_salud_pdf</a></li>
                                    @endif
                                    @if ($userFile->poliza_seguro_mala_praxis_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->poliza_seguro_mala_praxis_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span>
                                                poliza_seguro_mala_praxis_pdf</a></li>
                                    @endif
                                    @if ($userFile->habilitacion_consultorio_pdf)
                                        <li><a href="{{ asset('storage/' . $userFile->habilitacion_consultorio_pdf) }}"
                                                target="_blank"> <span class="text-blue-600">Descargar</span>
                                                habilitacion_consultorio_pdf</a></li>
                                    @endif
                                    <!-- Agrega más enlaces para los otros archivos -->
                                </ul>
                            </li>
                        @endforeach
                    </ol>


                </div>
            </div>
        </div>
    </div>

@endsection
