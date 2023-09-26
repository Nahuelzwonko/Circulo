<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Circulo de Kinesiologos Mendoza')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        @media (max-width: 768px) {

            /* Reducir el tamaño de fuente de la barra de herramientas y el título */
            .fc-header-toolbar,
            .fc-toolbar-title {
                font-size: 14px;
                /* Ajusta el tamaño de fuente según tus preferencias */
            }

            .fc .fc-toolbar {
                justify-content: center !important;
            }

            .fc-toolbar-chunk {
                display: flex;
                justify-content: center;
                align-content: center
            }

            .fc-toolbar-title{
                font-size: 1.1rem  !important;
                visibility: hidden;
            }
            .fc-header-toolbar .fc-left,
            .fc-header-toolbar .fc-center,
            .fc-header-toolbar .fc-right {
                width: 100%;
                /* Ocupa todo el ancho disponible */
            }

            .fc-header-toolbar .fc-center {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;

                padding: 5px 10px;
            }
            .parrafo{
                visibility: hidden;
            }
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    @yield('content')
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let formulario = document.getElementById("form");
        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: window.innerWidth < 768 ? 'listWeek' : 'dayGridMonth',
            locale: "es",
            displayEventTime: false,
            eventColor: '#1C64F2',

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth, listWeek'
            },
            events: "https://kinesiologosmza.com/user/mostrar",
            dateClick: function(info) {
                formulario.reset();
                formulario.start.value = info.dateStr;
                formulario.end.value = info.dateStr;
                $("#evento").modal("show");
            },
            eventClick: function(info) {
                var evento = info.event;
                // Obtener los detalles del evento desde el servidor
                $.ajax({
                    type: 'GET',
                    url: '/user/editar/' + evento.id,
                    success: function(response) {
                        $('#editarEventoModal').modal('show');
                        $('#evento_id').val(response.id);
                        $('#editTitle').val(response.title);
                        $('#editDescripcion').val(response.descripcion);
                        $('#editStart').val(response.start);
                        $('#editEnd').val(response.end);
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Manejar errores de la solicitud AJAX si es necesario
                        console.error('Error al obtener detalles del evento:',
                            errorThrown);
                    }
                });
            }


        });
        calendar.render();
        //Agregar evento.
        document.getElementById("btnGuardar").addEventListener("click", function() {
            event.preventDefault();
            let formulario = document.getElementById("form");
            let formData = new FormData(formulario);
            $.ajax({
                type: 'POST',
                url: '{{ route('store') }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'Evento guardado con éxito',
                        }).then(function() {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error al guardar el evento: ' + response.error,
                        });
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de solicitud',
                        text: 'Error de solicitud: ' + errorThrown,
                    });
                }
            });
        });
        //Guardar edicion
        $('#btnGuardarEdicion').click(function() {
            var formData = $('#editarEventoForm').serialize();

            $.ajax({
                type: 'POST',
                url: '/user/editar/' + $('#evento_id').val(),
                data: formData,
                success: function(response) {
                    if (response.success) {
                        // Mostrar alerta de éxito
                        Swal.fire('Guardado', 'Los cambios se han guardado correctamente.',
                            'success').then(function() {
                            // Recargar la página
                            location.reload();
                        });
                    } else {
                        Swal.fire('Error', 'Hubo un problema al guardar los cambios.',
                            'error');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire('Error', 'Hubo un problema al guardar los cambios.', 'error');
                }
            });
        });
        // Manejar el evento para eliminar el evento
        $('#btnEliminar').click(function() {
            var evento_id = $('#evento_id').val();

            // Puedes mostrar un cuadro de diálogo de confirmación aquí si lo deseas
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción eliminará el evento permanentemente.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then(function(result) {
                if (result.isConfirmed) {
                    // Si el usuario confirma la eliminación, envía la solicitud DELETE
                    $.ajax({
                        type: 'DELETE',
                        url: '/user/eliminar/' + evento_id,
                        data: {
                            _token: '{{ csrf_token() }}' // Agrega el token CSRF a la solicitud DELETE
                        },
                        success: function(response) {
                            if (response.success) {
                                // Mostrar una alerta de éxito
                                Swal.fire('Eliminado',
                                    'El evento ha sido eliminado correctamente.',
                                    'success').then(function() {
                                    // Cerrar el modal de edición
                                    $("#editarEventoModal").modal("hide");
                                    // Recargar la página para reflejar los cambios en el calendario
                                    location.reload();
                                });
                            } else {
                                Swal.fire('Error',
                                    'Hubo un problema al eliminar el evento.',
                                    'error');
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            Swal.fire('Error',
                                'Hubo un problema al eliminar el evento.',
                                'error');
                        }
                    });
                }
            });
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>


</html>
