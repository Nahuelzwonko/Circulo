<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Circulo de Kinesiologos Mendoza')</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../resources/img/favicon/favicon-16x16.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body > 
@yield('content')
</body>
</html>