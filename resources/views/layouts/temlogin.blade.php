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
    <style>
        .bg-naranja {
            background-color: #F28F1C;
            +background-repeat: none;
        }
    </style>
</head>

<body>
    @yield('content')

    <body class=" bg-[#546EF3]">
        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex mt-20">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url({{ asset('storage/card/login.svg') }}); background-position:center; ">
                    </div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Sign up</h3>
                        <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>



</html>
<!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->
