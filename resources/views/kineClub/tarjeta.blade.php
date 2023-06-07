<div class="hidden lg:block">
  <div class="w-full flex justify-center">
    <h1 class="text-black font-hammersmith font-bold text-[80px]">TARJETA DE BENEFICIOS</h1>
  </div>
  <div class="w-full h-[150vh] tarjetafondo flex justify-center items-center">
    <div class="w-[80%] h-[80vh] flex">
      <div class="w-1/2 flex items-center justify-center">
        <img src="{{ asset('storage/png/tarjeta.png')}}" alt="Imagen">
      </div>
      <div class="w-1/2 flex items-baseline justify-center">
        <div class="flex flex-wrap gap-8 ">
          <div class="w-[100%]">
              <p class="text-black text-3xl font-Poppins text-justify ">Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando continuamente para generar beneficios y facilidades para nuestros socios.</p>
          </div>
          <div class="w-[100%]">
              <p class="text-black text-3xl font-Poppins text-justify">Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud y bienestar.</p>
          </div>
          <button class=" bg-[#0051A7] hover:bg-blue-500 text-white text-2xl px-5  py-2 rounded-[10px] ml-16 "><a href="{{ route('asociate.index') }}">Quiero ser parte</a></button>
        </div>
        
      </div>
      
    </div>
    
  </div>
  <div class=" w-[55%] mx-auto text-center text-2xl font-extrabold font-Poppins">
  <p>Presentando tu tarjeta y DNI en los locales adheridos podrás acceder a los beneficios y descuentos. ¡Pasa a retirar tu tarjeta por el círculo y súmate a kineclub!</p>
  </div>
  
</div>

<!-- Responsive -->
<div class="block lg:hidden">
  
  <div class="flex flex-col justify-center items-center mt-16">
    <h1 class="text-2xl font-bold font-hammersmith">TARJETA DE BENEFICIOS</h1>
    
    <img src="{{ asset('storage/kineclub/kineclub-responsive.svg')}}" alt="Imagen">
    <p class="font-Poppins text-justify px-4">
    Desde el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza estamos trabajando continuamente para generar beneficios y facilidades para nuestros socios.
    Para seguir sumando beneficios, creamos KineClub: una tarjeta de descuentos exclusiva para los miembros del CKFM. Con KineClub, nuestros socios podrán acceder a importantes descuentos y promociones en insumos y servicios de gastronomía, hotelería y turismo, recreación y deporte, indumentaria, estética, salud y bienestar.
    </p>
    <button class="text-xl text-white p-4 lg:w-auto lg:rounded-full bg-[#0051A7] hover:bg-blue-700 self-center w-full rounded-none  mt-16">Quiero ser parte!</button>
  </div>
  <div class=" mx-auto text-center text-xl font-extrabold font-Poppins mt-8">
    <p>Presentando tu tarjeta y DNI en los locales adheridos podrás acceder a los beneficios y descuentos. ¡Pasa a retirar tu tarjeta por el círculo y súmate a kineclub!</p>
  </div>


</div>
  