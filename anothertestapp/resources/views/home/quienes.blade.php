<div class="flex justify-center align-center lg:block lg:visible lg:w-[full] lg:h-[70vh] fade-in items-center">
<div class="space-y-6 justify-between text-gray-600 lg:flex flex-row-reverse lg:gap-6 lg:space-y-0 xl:gap-12 lg:items-center sm:grid sm:grid-rows-1 sm:mt-8 lg:mt-0">
    <div class=" lg:w-1/2 sm:h-fit">
      <h2 class="font-custom slide-in-bottom-h1 text-3xl text-center font-bold text-black md:text-4xl">
        Quienes somos
      </h2>
      <div class="w-full justify-center flex">
        <p class=" font-Poppins w-[80%] my-8 text-gray-500 dark:text-black">
          Somos una asociación civil que agrupa a profesionales kinesiólogos, fisioterapeutas, terapistas físicos y licenciados en kinesiología. Nuestra tarea principal es generar convenios colectivos de prestación con las obras sociales, mutuales y prepagas en nombre y representación de nuestros socios buscando el aumento continuo de los aranceles.
        </p>
      </div>
      <div class="flex justify-center w-full">
        <button class=" font-Poppins invisible lg:visible bounce-top-icons bg-blue-700 hover:bg-blue-500 text-white px-5  py-2 rounded-[10px] "><a href="../quienes/index.blade.php">Saber Más</a></button>
      </div>      
    </div>
    {{-- Lo que hice fue fracturar todo y pasar a depender de mis box predeterminadas para poder llegar al objetivo utilizando solamente y div que tiene posicion absoluta con un right pero 
      ese absolute esta posicionado dentro de un div con box flex predeterminada para que no se desfase--}}
    {{-- divido en un div los objetos de fondo que voy a utilizar en este caso --}}
    <div class="md:4/10 lg:w-1/2 flex justify-start">
      {{-- Div con absolute para poder tener control total de la imagen --}}
      <div class="absolute z-10 right-35">
        {{-- lo encierro dentro de un box padre flex para evitar el desface --}}
        <div class="flex justify-center align-center w-full">
          {{-- Dentro de este box calculo el tamaño de la imagen  --}}
          <div class="w-[90%] sm:w-[70%]">
            <img src="{{asset ('storage/png/imagen.png')}}" alt=""  class="w-[80%]">
          </div>
        </div>
      </div>
      {{-- llamo al objeto que quiero principalmente de fondo y lo coloco a la izquierda --}}
      <img class="start-0  wobble-ver-right lg:w-[40%] sm:w-[60%]" src="{{asset ('storage/png/geometric/rectangle.svg')}}" alt="">
      {{-- Dentro de un div encierro el segundo objeto y lo posiciono a la izquierda --}}
      <div class="d:4/10 lg:w-1/2 flex justify-end">
        {{-- le doy las clases correspondientes a el div para que tenga el tañamo y posision que quiero --}}
        <img class="wobble lg:w-[40%] sm:w-[60%]" src="{{asset ('storage/png/geometric/Circle.svg')}}" alt="">
      </div>
    </div>
    <button class="font-Poppins visible lg:invisible bg-blue-700 hover:bg-blue-500 text-white text-2xl py-8 mb-8 mt-0"><a href="../quienes/index.blade.php">Saber Más</a></button>
  </div>
  </div>