<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Circulo de Kinesiologos Mendoza')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    @yield('content')
    <div class="min-h-screen bg-blue-500 flex justify-center items-center">
        <div
            class="absolute w-60 h-60 rounded-xl bg-[#F28F1C] -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Ingresa a tu cuenta</h1>
            </div>
            @yield('form')
        </div>
        <div class="w-40 h-40 absolute bg-[#F28F1C] rounded-full top-0 right-12 hidden md:block"></div>
        <div
            class="w-20 h-40 absolute bg-[#F28F1C] rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>



</html>
