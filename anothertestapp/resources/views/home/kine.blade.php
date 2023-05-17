<!-- Tamaño para grandes pantallas. -->
<div class="hidden lg:block lg:visible lg:w-[full] lg:h-[100vh] fade-in  ">
   <div class="bgKine w-full h-full flex justify-center items-center rounde">
    <div class="w-[60%] h-[60%] rounded-[20px] glass1">
        <div class="flex">
            <div class="w-1/2">
              <img src="{{ asset('storage/kineclub/kineclub.svg')}}" alt="Tarjetakineclub" class="w-full h-full object-cover pulse" />
            </div>
            <div class="w-1/2 ">
                <div class="flex justify-center">
                <h1 class="text-[50px] font-bold text-[#F28F1C]">KINE</h1>
                <h1 class="text-[50px] font-bold text-white">CLUB</h1><br>
            </div>
            <div class="flex justify-center text-white font-light">
                <p>Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando continuamente para generar beneficios y facilidades para nuestros socios.
                    Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud y bienestar.</p>
            </div>
            <div class="flex justify-center w-full mt-10 ">
                <button class=" bg-blue-700 hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] "><a href="../kineClub/index.blade.php">Quiero mi KineClub.</a></button>
              </div>
            </div>
            
          </div>
    </div>
   </div>
</div>
<!-- Responsive pantallas medianas y pequeñas -->
<div class=" lg:hidden lg:w-0 lg:h-0 flex flex-col w-[95%] md:w-4/5 bg-gray-800 rounded-[40px] mx-auto items-center">
  <h1 class="mt-32 mb-9 font-bold"><span class="text-[#F28F1C] text-[2.5rem] md:text-[4rem]">KINE</span><span class="text-[#546EF3] text-[2.5rem] md:text-[4rem]">CLUB</span></h1>
  <p class="text-white text-justify px-5 md:px-12 md:leading-8">
    Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando continuamente para generar beneficios y facilidades para nuestros socios.
    Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud y bienestar.
  </p>
  <div class="my-6">
    <img class="skew-x-[10deg] absolute z-0 left-20 md:left-60 w-3/12" src="{{asset ('storage/png/geometric/rectangle.svg')}}" alt="">
    <svg class="absolute z-0 top-[540%] md:top-[340%] right-[35%] w-3/12"width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle  cx="120.001" cy="120" r="120" fill="#F28F1C"/>
    </svg>
    <img class="z-[3] relative pulse" src="{{ asset('storage/kineclub/kineclub.svg')}}" alt="Tarjetakineclub" />
    
  </div>
  <button class=" w-full bg-blue-700 hover:bg-blue-500 text-white text-2xl py-8 rounded-br-[40px] rounded-bl-[40px] mt-8 "><a href="../quienes/index.blade.php">Quiero Ser Parte</a></button>
</div>  