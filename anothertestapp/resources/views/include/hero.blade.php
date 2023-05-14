<div class="h-[750px] bg-hero-bg" >
    <!-- Incluyo navbar -->
    @include('include.nav')
    <!-- Padre grid para dividir en dos columnas el contenido: queda el texto a la derecha y la imagen a la izquierda. -->
    <div class="grid lg:grid-cols-2 md:grid-cols-1 lg:mt-10 md:mt-4 md:mb-8">
        <!-- Hijo 1, ordena el contenido -->
        <div class="flex flex-col lg:items-baseline md:items-center lg:w-3/4 md:w-full md:h-28 gap-8 2xl:ml-64 lg:ml-48 mt-15">
            <!-- Título, subtitulo, botón. -->
            <h1 class="2xl:text-7xl xl:text-6xl md:text-5xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal md:leading-[3.5rem] lg:text-start md:text-center">El círculo que <br>nos une</br></h1>
            <p class=" text-white text-[1.4rem] font-extralight invisible lg:visible  ">Whereby is the super simple way to connect over video. <br>No downloads or long having into meeting links.</br></p>
            <button class=" text-white p-4 rounded-full bg-blue-900 hover:bg-blue-700 self-center invisible lg:visible">Conocénos!</button>
        </div>
        <!-- Hijo 2, contiene la imagen de la derecha. -->
        <div>
            <!-- Imagen -->
            <img class="h-[90%] lg:w-auto md:w-[33.7%] m-auto lg:mt-0 md:mt-4 rounded-tl-[160px] rounded-tr-3xl rounded-br-[160px] rounded-bl-3xl "src="../resources/img/hero-img.svg" alt="">
        </div>
        <div class="visible lg:invisible">
            <button class="w-full h-16 bg-blue-900 hover:bg-blue-700  text-white text-2xl">Conocénos!</button>
        </div>

    </div>
    
</div>
