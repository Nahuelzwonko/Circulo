@extends('layout')
@section('title', 'Login | CKFM')
@section('content')
<body class="bg-gradient-to-r from-sky-500 to-indigo-500 pb-20 w-screen h-screen">
    <!-- Clase Padre Grid. Para dividir el card en 2. -->
    <div class="  2xl:w-2/3 xl:4/5 lg:w-4/5 lg:grid lg:grid-cols-2 lg:mx-auto lg:mt-20 lg:rounded-xl  lg:shadow-2xl shadow-black ">
        <!-- Div 1, primer hijo. Contenido Principal: logo, título, form. -->
        <div class="left flex flex-col gap-10 items-center bg-white rounded-l-xl ">
            <!-- Este div contiene el logo y el slogan -->
            <div class="logo flex flex-row mt-12 gap-4 font-medium">
                <img class="" src="../resources/img/cfkm-logo.svg" alt="logo">
                <p class=""><span class="text-blue-500">C</span>írculo de<br>
                    <span class="text-blue-500">K</span>inesiólogos y<br>
                    <span class="text-blue-500">F</span>isioterapeutas<br>
                    <span class="text-blue-500">M</span>endoza

                </p>
            </div>
            <img class="rounded-2xl w-full h-2/5 lg:hidden"src="../resources/img/login-bg.svg" alt="">
            <!-- Título -->
            <h1 class="text-2xl w-3/4 font-medium text-blue-600">Inicia Sesión y disfrutá de todos los beneficios</h1>
            <!-- Formulario -->
            <!-- Separe el form en tres divs para poder ordenarlos y espaciarlos de diferentes maneras. -->
            <form action="" class="flex flex-col w-10/12 gap-8 justify-center mb-10 text-lg max[374px]:w-fit">
                <!-- Este div contiene los label e inputs. -->
                <div class="flex flex-col gap-2">
                    <label for="email" class="font-medium text-blue-600">Email</label>
                    <input type="email" name="email" id="email" class="p-2 border border-blue-200 rounded-lg">
                    <label for="password" class="font-medium text-blue-600">Contraseña</label>
                    <input type="password" name="password" id="password" class="p-2 border border-blue-200 rounded-lg">
                </div>
                <!-- Este div ordena el checkbox con su label con respecto al link de recuperar contraseña -->
                <div class="flex flex-row gap-36 text-base justify-center 2xl:gap-24 xl:gap-8 lg:gap-4 sm:items-center sm:gap-8">
                    <!-- Este div ordena SOLAMENTE el checkbox y el label. -->
                    <div class="flex flex-row gap-2">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox" class="mr-10 hover:cursor-pointer">Recordarme</label>
                    </div>
                    <a href="#" class="underline sm:text-sm md:text-base">Olvidaste tu contraseña?</a>
                </div>
                
                <!-- Este div ordena los botones. -->
                <div class="flex flex-row justify-center gap-10 mb-4 text-base font-medium">
                    <button class="border border-blue-500 rounded-lg px-12 bg-blue-500 text-white hover:bg-blue-700  md:py-3 sm:py-3"><a href="/pages/index.php">Iniciar Sesión</a></button>
                    <button class="border border-blue-500 rounded-lg px-12 text-blue-500  md:py-3 sm:py-3"><a href="circuloC/pages/register.php">Registrarme</a></button>
                </div>
                
                <span class="flex flex-row gap-8 justify-center 2xl:gap-4 xl:gap-3.5 xl:text-base lg:text-sm lg:gap-4 sm:text-xs sm:gap-2"><span class="font-light">O, Inicia Sesión con</span> <a href="#" class="text-blue-400 hover:underline">Facebook</a> <a href="#" class="text-blue-400 hover:underline">Linked In</a> <a href="#" class="text-blue-400 hover:underline">Google</a></span>
            </form>
        </div>
        <!-- Div 2, Segundo hijo. Contiene la imagen de la derecha. -->
        <div class="right h-full invisible lg:visible">
            <img class="rounded-r-xl h-full w-full" src="../resources/img/login-bg.svg" alt="">
        </div>
        
    </div>
    
</body>
@endsection