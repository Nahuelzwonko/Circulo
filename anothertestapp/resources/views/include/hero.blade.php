<div class="h-[750px] bg-hero-bg" >
    <!-- Incluyo navbar -->
    @include('include.nav')
    <!-- Padre grid para dividir en dos columnas el contenido: queda el texto a la derecha y la imagen a la izquierda. -->
    <div class="grid grid-cols-2 mt-10">
        <!-- Hijo 1, ordena el contenido -->
        <div class="flex flex-col items-baseline w-3/4 gap-8 ml-64 mt-15">
            <!-- Título, subtitulo, botón. -->
            <h1 class="text-7xl font-bold uppercase text-white leading-[6rem] ">El círculo que <br>nos une</br></h1>
            <p class=" text-white text-[1.4rem] font-extralight">Whereby is the super simple way to connect over video. <br>No downloads or long having into meeting links.</br></p>
            <button class=" text-white p-4 rounded-full bg-sky-900 hover:bg-sky-700 self-center">Conocénos!</button>
        </div>
        <!-- Hijo 2, contiene la imagen de la derecha. -->
        <div>
            <!-- Imagen -->
            <img class="h-[90%] m-auto rounded-tl-[160px] rounded-tr-3xl rounded-br-[160px] rounded-bl-3xl "src="../resources/img/hero-img.svg" alt="">
        </div>

    </div>
    
</div>
