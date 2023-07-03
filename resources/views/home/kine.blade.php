<div class="hidden lg:block lg:visible lg:w-[full] lg:h-[110vh] fade-in  ">
    <div style="  background-image: url(../public/storage/fondo/kinefondo.svg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: 70%;"
        class=" w-full h-full flex justify-center items-center rounde">
        <div class="w-[60%] h-[60%] rounded-[20px] glass1">
            <div class="flex">
                <div class="w-1/2">
                    <img src="{{ asset('storage/kineclub/kineclub.svg') }}" alt="Tarjetakineclub"
                        class="w-full h-full object-cover" />
                </div>
                <div class="w-1/2 py-4">
                    <div class="flex justify-center font-hammersmith">
                        <h1 class=" text-[50px] font-bold text-[#F28F1C]">KINE</h1>
                        <h1 class="text-[50px] font-bold text-white">CLUB</h1><br>
                    </div>
                    <div class="flex justify-center text-white font-Poppins text-justify px-8 text-lg">
                        <p>Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando
                            continuamente para generar beneficios y facilidades para nuestros socios.
                            Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para
                            los miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos
                            y promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y
                            deporte, indumentaria, estética, salud y bienestar.</p>
                    </div>
                    <div class="flex justify-center w-full mt-10 ">
                        <button class=" bg-[#0051A7] hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] "><a
                                href="{{ route('kine.index') }}" class="font-Poppins">Quiero mi KineClub</a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class=" lg:hidden lg:w-0 lg:h-0 flex flex-col w-[95%] md:w-4/5 bg-[#3D3D3E] rounded-[40px] mx-auto items-center">
    <h1 class="mt-12 mb-9 font-bold"><span class="text-[#F28F1C] text-[2.5rem] md:text-[4rem]">KINE</span><span
            class="text-[#546EF3] text-[2.5rem] md:text-[4rem]">CLUB</span></h1>
    <p class="text-white text-justify px-5 md:px-12 md:leading-8">
        Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando continuamente para generar
        beneficios y facilidades para nuestros socios.
        Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del
        CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos y servicios
        de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud y bienestar.
    </p>
    <div class="my-6">
        <img class="skew-x-[10deg] absolute z-0 left-20 md:left-60 w-3/12"
            src="{{ asset('storage/png/geometric/rectangle.svg') }}" alt="">

        <img class="z-[3] relative" src="{{ asset('storage/kineclub/kineclub.svg') }}" alt="Tarjetakineclub" />
    </div>
    <button
        class=" w-full bg-[#0051A7] hover:bg-blue-500 text-white text-2xl py-8 rounded-br-[40px] rounded-bl-[40px] mt-8 "><a
            href="../quienes/index.blade.php">La Quiero!</a></button>
</div>
