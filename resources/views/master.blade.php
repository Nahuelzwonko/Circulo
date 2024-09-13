<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Circulo de Kinesiologos Mendoza')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon.png') }}" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
    <style>
    .main-container {
        background-image: url('{{ asset('storage/fondo/hero-bg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
</head>

<body>
    <header class="h-[100vh] mb-[40px]">
        <div class="lg:h-[750px] sm:h-[745px] main-container">
            @include('include.nav')
            <div style="margin-top: 15rem;" class="flex flex-row justify-center items-center  lg:mt-[10rem] gap-[25rem] lg:gap-16">
                <div
                    class="flex items-center justify-center text-center flex-col  sm:items-center lg:w-3/4 sm:w-full sm:h-28  mt-15">
                    <h1
                        class="font-hammersmith 2xl:text-7xl xl:text-6xl sm:text-5xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal sm:leading-[3.5rem]  ">
                        @yield('Encabezado', 'titulo generico')</h1>
                    <p class=" text-white text-[1.4rem] font-extralight mt-8 ">@yield('cont', 'aca va todo el contenido que sea dirigido hacia el heading generico')</p>
                </div>
            </div>
        </div>
        <button
            class="block lg:hidden text-xl text-white p-4 lg:w-auto lg:rounded-full bg-[#0051A7] hover:bg-blue-700 self-center w-full rounded-none invisible">@yield('Boton', 'boton generico')</button>
    </header>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 'auto',
            spaceBetween: 9,
            autoplay: {
                delay: 2000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>
