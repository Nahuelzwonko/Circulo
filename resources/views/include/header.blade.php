<style>
    .main-container {
        background-image: url('{{ asset('storage/fondo/hero-bg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<div class="main-container md:h-[750px] sm:h-auto bg-hero-bg">
    @include('include.nav')
    <div class="grid lg:grid-cols-2 sm:grid-cols-1 lg:mt-10 mt-5 mb:mb-8 sm:mb-0 md:gap-8 lg:gap-0">
        <div
            class="flex flex-col lg:items-center sm:items-center lg:w-3/4 sm:w-full sm:h-28 gap-8 2xl:ml-64 lg:ml-48 mt-15 text-center">
            <h1
                class="font-hammersmith  2xl:text-7xl xl:text-6xl sm:text-4xl font-bold uppercase text-white 2xl:leading-[6rem] xl:leading-[4.5rem] lg:leading-normal sm:leading-[3.5rem] lg:text-center sm:text-center">
                El círculo nos une</h1>
            <p class=" text-white text-[1.4rem] font-extralight invisible lg:visible  ">¡Bienvenidos al Círculo de Kinesiólogos de Mendoza, donde la pasión por la kinesiología se encuentra con el compromiso de mejorar la calidad de vida!</br></p>
            <button
                class="xl:text-xl text-white p-4 rounded-full bg-[#0051A7] hover:bg-blue-700 self-center invisible lg:visible">Conocénos!</button>
        </div>
        <div>
            <img class="h-[90%] lg:w-auto md:w-[33.7%] m-auto lg:mt-0 md:mt-4 sm:w-[250px] sm:mt-4 rounded-tl-[160px] rounded-tr-3xl rounded-br-[160px] rounded-bl-3xl "src="{{ asset('storage/img-personas/hero-img.svg') }}"
                alt="">
        </div>
        <div class="visible lg:invisible">
            <button class="w-full h-16 bg-[#0051A7] hover:bg-blue-700  text-white text-2xl">Conocénos!</button>
        </div>
    </div>
</div>
