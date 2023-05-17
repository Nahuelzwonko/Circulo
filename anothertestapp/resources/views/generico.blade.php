<div class="md:h-[750px] sm:h-auto bg-hero-bg" >
    @include('include.nav')
    <div class="flex justify-center items-center mt-20">
        <div class="flex items-center justify-center text-center flex-col  sm:items-center lg:w-3/4 sm:w-full sm:h-28  mt-15">
            <h1 class="2xl:text-7xl xl:text-6xl sm:text-5xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal sm:leading-[3.5rem]  ">@yield('titulo', 'titulo generico')</h1>
            <p class=" text-white text-[1.4rem] font-extralight invisible lg:visible  ">@yield('contenido', 'aca va todo el contenido que sea dirigido hacia el heading generico')</p>
        </div>
    </div>
</div>