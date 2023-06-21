<div class="flex justify-center align-center lg:block lg:visible lg:w-[full] lg:h-[70vh] fade-in items-center">
    <div
        class="space-y-6 justify-between text-gray-600 lg:flex flex-row-reverse lg:gap-6 lg:space-y-0 xl:gap-12 lg:items-center sm:grid sm:grid-rows-1 sm:mt-8 lg:mt-0">
        <div class=" lg:w-1/2 sm:h-fit">
            <h2 class="font-hammersmith slide-in-bottom-h1 text-3xl text-center font-bold text-black md:text-5xl">
                Quienes Somos
            </h2>
            <div class="w-full justify-center flex">
                <p class=" text-base lg:text-xl font-Poppins w-[80%] my-8 text-gray-500 text-justify">
                    Somos una asociación civil que agrupa a profesionales kinesiólogos, fisioterapeutas, terapistas
                    físicos y licenciados en kinesiología. Nuestra tarea principal es generar convenios colectivos de
                    prestación con las obras sociales, mutuales y prepagas en nombre y representación de nuestros socios
                    buscando el aumento continuo de los aranceles.
                </p>
            </div>
            <div class="flex justify-center w-full">
                <button
                    class=" font-Poppins invisible lg:visible bounce-top-icons bg-[#0051A7] hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] "><a
                        href="{{ route('quienes.index') }}">Saber Más</a></button>
            </div>
        </div>
        <div class="md:4/10 lg:w-1/2 flex justify-start">
            <div class="absolute z-10 right-35">
                <div class="flex justify-center align-center w-full">
                    <div class="w-[90%] sm:w-[70%]">
                        <img src="{{ asset('storage/png/imagen.png') }}" alt="" class="w-[80%]">
                    </div>
                </div>
            </div>
            <img class="start-0  wobble-ver-right lg:w-[40%] sm:w-[60%]"
                src="{{ asset('storage/png/geometric/Rectangle.svg') }}" alt="">
            <div class="d:4/10 lg:w-1/2 flex justify-end">
                <img class="wobble lg:w-[40%] sm:w-[60%]" src="{{ asset('storage/png/geometric/Circle.svg') }}"
                    alt="">
            </div>
        </div>
        <button
            class="font-Poppins visible lg:invisible bg-[#0051A7] hover:bg-blue-500 text-white text-2xl py-8 mb-8 mt-0"><a
                href="../quienes/index.blade.php">Saber Más</a></button>
    </div>
</div>
