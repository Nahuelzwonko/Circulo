<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Circulo de Kinesiologos Mendoza')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @vite('resources/css/app.css')

</head>

<body>
    @yield('content')

</body>
<script>
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    var booking = @json($events);

    function addEvent(start, end) {
        $('#bookingModal').modal('toggle');

        $('#saveBtn').click(function() {
            var title = $('#title').val();
            var start_date = moment(start).format('YYYY-MM-DD');
            var end_date = moment(end).format('YYYY-MM-DD');

            $.ajax({
                url: "{{ route('storeevent') }}",
                type: "POST",
                dataType: 'json',
                data: {
                    title,
                    start_date,
                    end_date,
                },
                success: function(response) {
                    $('#bookingModal').modal('hide');
                    $('#calendar').fullCalendar('renderEvent', {
                        'title': response.title,
                        'start': response.start,
                        'end': response.end,
                        'color': response.color
                    });
                },
                error: function(error) {
                    if (error && error.responseJSON && error.responseJSON.errors) {
                        $('#titleError').html(error.responseJSON.errors.title);
                    }
                },
            });
        });
    }

    $('#calendar').fullCalendar({
        header: {
            left: 'prev, next, today',
            center: 'title',
            right: 'month, agendaWeek, agendaDay',
        },
        events: booking,
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDays) {
            addEvent(start, end);
        },
        editable: true,
        eventDrop: function(event) {
            var id = event.id;
            var start_date = moment(event.start).format('YYYY-MM-DD');
            var end_date = moment(event.end).format('YYYY-MM-DD');
            $.ajax({
                url: "{{ route('update', '') }}" + '/' + id,
                type: "PATCH",
                dataType: 'json',
                data: {
                    start_date,
                    end_date,
                },
                success: function(response) {
                    Swal.fire(
                        'Cambiado con éxito!',
                        '',
                        'success'
                    )
                },
                error: function(error) {
                    console.log(error);
                },
            });
        },
        eventClick: function(event) {
            var id = event.id;
            if (confirm('¿Estás seguro de eliminar este dato?')) {
                $.ajax({
                    url: "{{ route('destroy', '') }}" + '/' + id,
                    type: "DELETE",
                    dataType: 'json',
                    success: function(response) {
                        $('#calendar').fullCalendar('removeEvent', response);
                        Swal.fire(
                            'Eliminado con éxito!',
                            '',
                            'warning'
                        )
                    },
                    error: function(error) {
                        console.log(error);
                    },
                });
            }
        },
    });

    $("#bookingModal").on("hidden.bs.modal", function() {
        $('#saveBtn').unbind('click');
    });

    $('.fc-event').css('font-size', '13px');
    $('.fc-event').css('display', 'flex');
    $('.fc-event').css('justify-content', 'center');
    $('.fc-event').css('width', 'auto');
    $('.fc-event').css('border-radius', '30px');
    $('.fc-event').css('height', '20px');

});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


</html>
