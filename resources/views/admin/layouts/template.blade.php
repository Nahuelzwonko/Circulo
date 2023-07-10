<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Circulo de Kinesiologos Mendoza')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/storage/favicon/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')

</head>

<body>
    @include('admin.include.nav')
    @yield('content')
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>
