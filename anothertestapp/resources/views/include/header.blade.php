<div class="md:h-[750px] sm:h-auto bg-hero-bg" >
    <!-- Incluyo navbar -->
    @include('include.nav')
    <!-- Padre grid para dividir en dos columnas el contenido: queda el texto a la derecha y la imagen a la izquierda. -->
    <div class="grid lg:grid-cols-2 sm:grid-cols-1 lg:mt-10 sm:mt-8 mb:mb-8 sm:mb-0 md:gap-8 lg:gap-0">
        <!-- Hijo 1, ordena el contenido -->
        <div class="flex flex-col lg:items-baseline sm:items-center lg:w-3/4 sm:w-full sm:h-28 gap-8 2xl:ml-64 lg:ml-48 mt-15">
            <!-- Título, subtitulo, botón. -->
            <h1 class="2xl:text-7xl xl:text-6xl sm:text-5xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal sm:leading-[3.5rem] lg:text-start sm:text-center">El círculo que <br>nos une</br></h1>
            <p class=" text-white text-[1.4rem] font-extralight invisible lg:visible  ">Whereby is the super simple way to connect over video. <br>No downloads or long having into meeting links.</br></p>
            <button class=" text-white p-4 rounded-full bg-blue-900 hover:bg-blue-700 self-center invisible lg:visible">Conocénos!</button>
        </div>
        <!-- Hijo 2, contiene la imagen de la derecha. -->
        <div>
            <!-- Imagen -->
            <img class="h-[90%] lg:w-auto md:w-[33.7%] m-auto lg:mt-0 md:mt-4 sm:w-[300px] sm:mt-16 rounded-tl-[160px] rounded-tr-3xl rounded-br-[160px] rounded-bl-3xl "src="{{asset ('storage/img-personas/hero-img.svg')}}" alt="">
        </div>
        <div class="visible lg:invisible">
            <button class="w-full h-16 bg-blue-900 hover:bg-blue-700  text-white text-2xl">Conocénos!</button>
        </div>
    </div>
</div>
