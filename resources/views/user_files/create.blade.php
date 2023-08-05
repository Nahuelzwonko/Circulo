@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')
@section('content')
    <div id="alert-additional-content-1"
        class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-100 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
        role="alert">
        <div class="flex items-center justify-center">


            <h3 class="text-lg font-medium ">Mantengámonos Actualizados</h3>
        </div>
        <div class="w-full flex justify-center">
            <div class="mt-2 mb-4  text-sm text-center">
                Estamos implementando una nueva forma de presentar tus documentos. A partir de ahora, ya no es necesario que
                te
                desplaces para entregar tus archivos de forma presencial. Nuestro sistema de presentación en línea te brinda
                la
                conveniencia de cargar tus documentos desde donde te encuentres. Simplifica el proceso y mantén tu
                información
                actualizada de manera eficiente.
            </div>
        </div>

        <div class="flex justify-center ">
           
            <button type="button"
                class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800"
                data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                Entendido
            </button>
        </div>
    </div>
    <section class="text-gray-600 body-font ">
        <div class="w-full flex justify-center mt-5">
            <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
        </div>
        <div class="w-full bg-layer-1 p-6 text-center md:p-20">
            <div class="mx-auto w-full max-w-6xl">
                <span
                    class="leading-sm inline-flex items-center rounded-full border-2 border-blue-400 bg-blue-400 px-2 py-0.5 text-xs font-bold  uppercase text-grey-800 shadow-sm">
                    <!-- Heroicon name: outline/light-bulb -->
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="mr-1 h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    Nuevo
                </span>
                <h2
                    class="mx-auto mt-4 text-center text-3xl font-semibold tracking-tight text-heading md:max-w-2xl md:text-4xl">
                    Carga tus Documentos en un <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500 uppercase">
                        INSTANTE</mark>
                </h2>
                <p class="mt-6 text-xl text-text">
                    Organiza y mantén todos tus archivos esenciales en un solo lugar.<br> Mantene tus datos con el
                    circulo siempre actualizado.
                </p>

                <div>
                    <div class="max-w-lg mx-auto text-start">
                        <form action="{{ route('user-files.store') }}" method="POST" enctype="multipart/form-data"
                            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            <!-- Campo para el Nombre y Apellido -->

                            <div class="mb-6">
                                <label for="nombre_apellido"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre y
                                    Apellido (completo)</label>
                                <input type="text" name="nombre_apellido" id="nombre_apellido"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>

                            </div>
                            <!-- Campo para el Currículum Vitae (PDF) -->
                            <div class="mb-4">
                                <label for="cv_pdf" class="block text-gray-700 text-sm font-bold mb-2">Currículum
                                    Vitae (PDF):</label>
                                <input type="file" name="cv_pdf" id="cv_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Currículum Vitae (Actualizado).</p>
                            </div>
                            <!-- Campo para la Imagen de DNI -->
                            <div class="mb-4">
                                <label for="dni_image" class="block text-gray-700 text-sm font-bold mb-2">Imagen de
                                    DNI
                                    (JPEG/PNG/JPG):</label>
                                <input type="file" name="dni_image" id="dni_image"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".jpeg,.png,.jpg">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Cargar imagen
                                    formato PNG, JPG (MAX. 800x400px)</p>

                            </div>
                            <!-- Campo para Título Universitario (PDF) -->
                            <div class="mb-4">
                                <label for="titulo_universitario_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Título Universitario
                                    (PDF):</label>
                                <input type="file" name="titulo_universitario_pdf" id="titulo_universitario_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Título Universitario (1 copia certificada).</p>
                            </div>
                            <!-- Campo para Título de Posgrado (PDF) -->
                            <div class="mb-4">
                                <label for="titulo_posgrado_pdf" class="block text-gray-700 text-sm font-bold mb-2">Título
                                    de Posgrado
                                    (PDF):</label>
                                <input type="file" name="titulo_posgrado_pdf" id="titulo_posgrado_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Título posgrado (En caso de poseer).</p>

                            </div>
                            <!-- Campo para Matrícula Provincial (PDF) -->
                            <div class="mb-4">
                                <label for="matricula_provincial_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Matrícula Provincial
                                    (PDF):</label>
                                <input type="file" name="matricula_provincial_pdf" id="matricula_provincial_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Matrícula Provincial (En caso de poseer).</p>

                            </div>
                            <!-- Campo para Constancia de Ingresos Brutos (PDF) -->
                            <div class="mb-4">
                                <label for="constancia_ingresos_brutos_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Constancia de Ingresos Brutos
                                    (PDF):</label>
                                <input type="file" name="constancia_ingresos_brutos_pdf"
                                    id="constancia_ingresos_brutos_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Constancia Ingresos Brutos.</p>

                            </div>
                            <!-- Campo para Constancia de CUIT (PDF) -->
                            <div class="mb-4">
                                <label for="constancia_cuit_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Constancia de CUIT
                                    (PDF):</label>
                                <input type="file" name="constancia_cuit_pdf" id="constancia_cuit_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Constancia de CUIT (constancia del sitio Web de AFIP-DGI)</p>

                            </div>
                            <!-- Campo para Certificado de Inscripción en Superintendencia de Salud (PDF) -->
                            <div class="mb-4">
                                <label for="certificado_inscripcion_superintendencia_salud_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Certificado de Inscripción en
                                    Superintendencia de Salud (PDF):</label>
                                <input type="file" name="certificado_inscripcion_superintendencia_salud_pdf"
                                    id="certificado_inscripcion_superintendencia_salud_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Certificado de Inscripción en la Superintendencia de la Salud</p>

                            </div>
                            <!-- Campo para Póliza de Seguro de Mala Praxis (PDF) -->
                            <div class="mb-4">
                                <label for="poliza_seguro_mala_praxis_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Póliza de Seguro de Mala
                                    Praxis
                                    (PDF):</label>
                                <input type="file" name="poliza_seguro_mala_praxis_pdf"
                                    id="poliza_seguro_mala_praxis_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Póliza de Seguro de Mala Praxis vigente</p>

                            </div>
                            <!-- Campo para Habilitación de Consultorio (PDF) -->
                            <div class="mb-4">
                                <label for="habilitacion_consultorio_pdf"
                                    class="block text-gray-700 text-sm font-bold mb-2">Habilitación de Consultorio
                                    (PDF):</label>
                                <input type="file" name="habilitacion_consultorio_pdf"
                                    id="habilitacion_consultorio_pdf"
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    accept=".pdf">
                                <p id="floating_helper_text" class=" text-xs text-gray-500 dark:text-gray-400">Archivo PDF
                                    Habilitación del Consultorio (emitida por Ministerio de Salud y/o Municipalidad y/o
                                    Colegio Médico.)</p>

                            </div>
                            <!-- Botón para enviar el formulario -->
                            <div class="flex items-center justify-center">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Cargar archivos
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
