<div class="lg:h-[750px] sm:h-[750px] bg-hero-bg mb-12" >
    @include('include.nav')
    <div class="flex flex-col justify-center items-center mt-32 gap-[25rem] lg:gap-16">
        <div class="flex items-center justify-center text-center flex-col  sm:items-center lg:w-3/4 sm:w-full sm:h-28  mt-15">
            <h1 class="2xl:text-7xl xl:text-6xl sm:text-5xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal sm:leading-[3.5rem]  ">@yield('titulo', 'titulo generico')</h1>
            <p class=" text-white text-[1.4rem] font-extralight mt-8 ">@yield('contenido', 'aca va todo el contenido que sea dirigido hacia el heading generico')</p>
            
            
        </div>
        <button class="text-xl text-white p-4 lg:w-auto lg:rounded-full bg-[#0051A7] hover:bg-blue-700 self-center w-full rounded-none  mb-12">Conocénos!</button>
    </div>
    
</div>
