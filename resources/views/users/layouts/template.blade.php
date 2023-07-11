<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Circulo de Kinesiologos Mendoza')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon.png') }}" />
    @vite('resources/css/app.css')
    @vite('resources/css/card.css')
    <style>
        .fc-calendar {
            
        }
    </style>

</head>

<body>
    @yield('content')
    
</body>



</html>
