@extends('users.layouts.agenda')
@section('title', 'Bienvenido')
<div class="z-40">
    @include('users.include.nav')
</div>

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <section class="text-gray-600 body-font">
        <div class="px-5 py-4 mx-auto">
            <div class="w-full flex items-center justify-center">
                <span
                    class="leading-sm inline-flex items-center rounded-full border-2  bg-green-300 px-2 py-0.5 text-xs font-bold  uppercase text-grey-800 shadow-sm">

                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="mr-1 h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    Ya disponible
                </span>
            </div>
            <div class="flex flex-col text-center w-full ">

                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font ">Circulo de kinesiologos
                    mendoza</h2>
                <h1
                    class="text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    MI <span class="text-blue-600 dark:text-blue-500">AGENDA</span> VIRTUAL</h1>

            </div>
            {{--  --}}
        </div>
    </section>
    <button type="button" class="btn btn-primary hidden" data-bs-toggle="modal" data-bs-target="evento">
        Launch demo modal
    </button>
    <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header flex w-full justify-center">
                    <h1 class="modal-title text-center fs-5 text-xl font-semibold text-gray-900 dark:text-white"
                        id="exampleModalLabel">Nuevo evento</h1>
                </div>
                <div class="modal-body">
                    <form class="space-y-6" action="{{ route('store') }}" method="POST" id="form">
                        @csrf
                        {{-- title --}}
                        <div>
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                            <input type="text" name="title" id="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Escribe el titulo del evento.." required>
                        </div>
                        {{-- des --}}
                        <div>
                            <label for="descripcion"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                            <textarea id="descripcion" name="descripcion" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Descripción del evento..."></textarea>
                        </div>
                        {{-- fecha --}}
                        <div>
                            <div date-rangepicker class="flex items-center">
                                {{-- start --}}
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="start" type="text" for="start"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-gray-500">to</span>
                                {{-- end --}}
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="end" type="text" for="end"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                        </div>

                    </form>
                    {{-- botones --}}
                    <div
                        class="flex items-center justify-center  mt-3  space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">

                        <button type="button" id="btnGuardar"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar
                        </button>
                        <button type="button" id="btnCerrar" style="background-color: red;"
                            class="focus:outline-none text-white bg-red-700   font-medium rounded-lg text-sm px-5 py-2.5 mr-2"
                            data-bs-dismiss="modal">Cerrar</button>
                    </div>

                    {{-- end botones --}}
                </div>



            </div>
        </div>
    </div>
    <div class="modal fade" id="editarEventoModal" tabindex="-1" role="dialog" aria-labelledby="editarEventoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header flex w-full justify-center">
                        <h1 class="modal-title text-center fs-5 text-xl font-semibold text-gray-900 dark:text-white"
                            id="editarEventoModalLabel">Editar Evento</h1>
                    </div>

                </div>
                <div class="modal-body">
                    <!-- Formulario de edición del evento -->
                    <form id="editarEventoForm" class="space-y-6">
                        @csrf
                        <input type="hidden" name="evento_id" id="evento_id">
                        <div>
                            <label for="editTitle"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                id="editTitle" name="title">
                        </div>
                        <div>
                            <label for="editDescripcion"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                            <textarea
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="editDescripcion" name="descripcion" rows="4"></textarea>
                        </div>
                        <div date-rangepicker class="flex items-center">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input type="text" class="form-control" id="editStart" name="start"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input type="text" class="form-control" id="editEnd" name="end"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date end">
                            </div>
                        </div>
                    </form>
                </div>
                <div
                    class="flex items-center justify-center  space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 mb-3">
                    <button type="button"
                        class="py-2.5 px-5 mr-2  text-sm font-medium text-gray-900 focus:outline-none bg-gray-400 hover:bg-gray-300 rounded-lg border border-gray-200"
                        data-dismiss="modal">Cerrar</button>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        id="btnGuardarEdicion">Guardar</button>

                </div>
                <div class="flex items-center justify-center p-6 ">
                    <button type="button" id="btnEliminar" style="background-color: red;"
                        class="focus:outline-none text-white    font-medium rounded-lg text-sm px-5 py-2.5 mr-2  ">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <section class="text-gray-600 body-font ">
        <div class="w-full sm:w-[90%]  py-2 sm:py-24 mx-auto">
            <div id="calendar" class="bg-blue-100 h-full sm:w-full w-screen "></div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <p class=" text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">La agenda permite a los
                    usuarios
                    ver, agregar, modificar y eliminar eventos de una manera intuitiva
                    y visual. Es una herramienta práctica para planificar y organizar actividades, ya sea para uso personal
                    o
                    empresarial.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Visualización
                        </h1>
                        <p class="leading-relaxed mb-3">La agenda muestra diferentes vistas, como mes, semana y día, para
                            que los usuarios puedan ver los eventos de acuerdo a su preferencia.</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Navegación
                        </h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden navegar fácilmente hacia atrás y hacia adelante
                            en el tiempo usando los botones de navegación (previo y siguiente) o pueden volver al día actual
                            haciendo clic en el botón "hoy".</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Agregar un
                            nuevo</h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden hacer clic y arrastrar en el calendario para
                            seleccionar un rango de fechas y horas y luego agregar un título al evento. Después de hacer
                            clic en el botón "Guardar", el evento se agregará al calendario.</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Modificar
                            eventos</h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden hacer clic y arrastrar un evento existente en
                            el
                            calendario para cambiar su fecha y hora de inicio y finalización. Una vez que se suelta el
                            evento en su nueva posición, se guardará automáticamente.</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Eliminar
                            eventos</h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden hacer clic en un evento existente para
                            seleccionarlo y luego confirmar si desean eliminarlo o no. Si confirman, el evento se eliminará
                            del calendario.</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Cambio de
                            vista</h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden cambiar entre las diferentes vistas
                            disponibles,
                            como mes, semana o día, para adaptarse a sus necesidades de visualización.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('users.include.footer')
@endsection
