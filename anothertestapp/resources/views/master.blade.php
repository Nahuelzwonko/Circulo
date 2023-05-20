<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo', 'Circulo de Kinesiologos Mendoza')</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage/favicon/favicon.png')}}" /> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
    <body > 
        <header class="h-[100vh] mb-[40px]">
            <div class="lg:h-[750px] sm:h-[750px] bg-hero-bg mb-12" >
                @include('include.nav')
                <div class="flex flex-col justify-center items-center mt-32 gap-[25rem] lg:gap-16">
                    <div class="flex items-center justify-center text-center flex-col  sm:items-center lg:w-3/4 sm:w-full sm:h-28  mt-15">
                        <h1 class="2xl:text-7xl xl:text-6xl sm:text-5xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal sm:leading-[3.5rem]  ">@yield('Encabezado', 'titulo generico')</h1>
                        <p class=" text-white text-[1.4rem] font-extralight mt-8 ">@yield('cont', 'aca va todo el contenido que sea dirigido hacia el heading generico')</p>
                    </div>
                </div>
            </div>
          </header>
          @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script> 
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      </body>
      </html>