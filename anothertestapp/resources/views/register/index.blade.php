<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="resources/css/app.css">
    @vite('resources/css/app.css')
</head>
<!-- Body le da el fondo gradiente de amarillo a naranja. -->
<body class="bg-gradient-to-r from-yellow-500 to-orange-500">
     <!-- Clase Padre Grid. Para dividir el card en 2. -->
    <div class="grid grid-cols-2 mt-20 w-2/3 rounded-xl mx-auto shadow-2xl shadow-black">
        <!-- Div 1, primer hijo. Contenido Principal: título, form. -->
        <div class="left flex flex-col gap-10 items-center bg-white rounded-l-xl">
               <!--Título  -->
            <h1 class="text-2xl w-3/4 font-bold text-4xl text-blue-600 mt-8">Bienvenido, Registrate!</h1>
            <!-- Formulario -->
            <!-- Separe el form en tres divs para poder ordenarlos y espaciarlos de diferentes maneras. -->
            <form action="POST" class="flex flex-col w-10/12 gap-8 justify-center mb-10 text-lg ">
                <!-- Este div contiene los label e inputs. -->
                <div class="flex flex-col gap-2">
                    <label for="name" class="font-medium text-blue-600">Nombre</label>
                    <input type="text" name="name" id="name" class="p-2 border border-blue-200 rounded-lg">
                    <label for="email" class="font-medium text-blue-600">Email</label>
                    <input type="email" name="email" id="email" class="p-2 border border-blue-200 rounded-lg">
                    <label for="phone" class="font-medium text-blue-600">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="p-2 border border-blue-200 rounded-lg">
                    <label for="password" class="font-medium text-blue-600">Contraseña</label>
                    <input type="password" name="password" id="password" class="p-2 border border-blue-200 rounded-lg">
                </div>
                <!-- Este div ordena el checkbox con su label con respecto al link de recuperar contraseña -->
                <div class="flex flex-row gap-36 text-base">
                    <!-- Este div ordena SOLAMENTE el checkbox y el label. -->
                    <div class="flex flex-row gap-2">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox" class="mr-10 hover:cursor-pointer">Recordarme</label>
                    </div>
                    
                    <a href="#" class="underline">Olvidaste tu contraseña?</a>
                </div>
                
                <!-- Este div ordena los botones. -->
                <div class="flex flex-row justify-center gap-10 mb-4 text-base font-medium">
                    <button class="border border-blue-500 rounded-lg py-3 px-12 bg-blue-500 text-white hover:bg-blue-700"><a href="/pages/index.php">Registrarme</a></button>
                    <button class="border border-blue-500 rounded-lg py-3 px-12 text-blue-500"><a href="/pages/login.php">Iniciar Sesión</a></button>
                </div>
                
                <span class="flex flex-row gap-8"><span class="font-light">O, Inicia Sesión con</span> <a href="#" class="text-blue-400 hover:underline">Facebook</a> <a href="#" class="text-blue-400 hover:underline">Linked In</a> <a href="#" class="text-blue-400 hover:underline">Google</a></span>
            </form>
        </div>
        <!-- Div 2, Segundo hijo. Contiene la imagen de la derecha. -->
        <div class="right h-full">
            <img class="rounded-r-xl h-full"src="./img/login-bg.svg" alt="">
        </div>
        
    </div>
    
</body>
</html>