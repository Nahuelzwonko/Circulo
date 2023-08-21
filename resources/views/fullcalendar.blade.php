@extends('users.layouts.agenda')
@section('title', 'Bienvenido')
@include('users.include.nav')
@section('content')

    <button type="button" class="btn btn-primary hidden" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Booking title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="title">
                    <span id="titleError" class="text-danger"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="fullContainer">
        <div class="customCalendar">
            <div class="sm:p-10">
                <div id="calendar"></div>
            </div>
        </div>
    </div> --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="w-full flex items-center justify-center">
                <span
                    class="leading-sm inline-flex items-center rounded-full border-2  bg-yellow-300 px-2 py-0.5 text-xs font-bold  uppercase text-grey-800 shadow-sm">
                    <!-- Heroicon name: outline/light-bulb -->
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="mr-1 h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    Próximamente
                </span>
            </div>
            <div class="flex flex-col text-center w-full mb-20">

                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Circulo de kinesiologos
                    mendoza</h2>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    MI <span class="text-blue-600 dark:text-blue-500">AGENDA</span> VIRTUAL</h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">La agenda permite a los usuarios
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
                {{--  --}}
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
                {{--  --}}
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
                {{--  --}}
                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Modificar
                            eventos</h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden hacer clic y arrastrar un evento existente en el
                            calendario para cambiar su fecha y hora de inicio y finalización. Una vez que se suelta el
                            evento en su nueva posición, se guardará automáticamente.</p>
                    </div>
                </div>
                {{--  --}}
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
                {{--  --}}
                <div class="p-4 lg:w-1/3">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <h1 class="title-font text-center sm:text-2xl text-xl font-medium text-gray-900 mb-3">Cambio de
                            vista</h1>
                        <p class="leading-relaxed mb-3">Los usuarios pueden cambiar entre las diferentes vistas disponibles,
                            como mes, semana o día, para adaptarse a sus necesidades de visualización.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('users.include.footer')
@endsection
{{-- cdn bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
