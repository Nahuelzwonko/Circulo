@extends('master')
@section('titulo', 'Contacto | CKFM')
@section('Encabezado', 'Contacto')
@section('cont', '')
@section('content')
    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class=" lg:py-16  mx-auto max-w-screen-md">
                <div class="flex justify-center items-center">
                    <h1 class="text-black font-hammersmith text-[50px]">HABLEMOS</h1>
                </div>
                <div class="py-4  flex justify-center ">
                    <div class="w-[80%] lg:w-[50%] font-Poppins text-black text-lg font-bold text-justify ">
                        <p>Envíanos un correo electrónico o inicia una conversación llenando el siguiente formulario.</p>
                    </div>
                </div>
                <div class="py-4 flex justify-center items-center">
                    <div class="w-[90%] lg:w-[50%]">
                        <h2 class="font-hammersmith text-black text-[20px]">¡Contáctenos directamente!</h2>
                    </div>
                </div>
                <div class="space-y-4 ">
                    <div class="flex w-full justify-center items-center py-2">
                        <div class="py-8 flex flex-col justify-center items-center rounded-[10px] w-[90%] lg:w-[50%] h-[80px] bg-[#273D8C]">
                            <h1 class="text-center text-white font-Poppins lg:text-xl">Email</h1>
                            <p class="text-center text-white font-Poppins text-sm">administracion@kinesiologosmza.com.ar</p>
                        </div>
                    </div>
                    <div class="flex w-full justify-center items-center py-2">
                        <div class="py-8 flex flex-col items-center justify-center rounded-[10px] w-[90%] lg:w-[50%] h-[80px] bg-[#273D8C]">
                            <h1 class="text-center text-white font-Poppins lg:text-xl">Teléfono</h1>
                            <p class="text-center text-white font-Poppins text-sm">0261 4298915</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                    <form action="{{ route('enviar.contacto') }}" class="space-y-8 flex flex-col" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-xl text-black font-Poppins font-bold">Nombre y Apellido*</label>
                                <input type="text" id="name"
                                    class=" shadow-sm border border-gray-300 text-black text-lg rounded-[30px] focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="Tu nombre" name="name" id="name" required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-xl font-bold text-black font-Poppins">Email*</label>
                                <input 
                                    class="shadow-sm border border-gray-300 text-black text-lg rounded-[30px] focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="tucorreo@correo.com" type="email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <label for="number"
                                    class="block mb-2 text-xl font-bold text-black font-Poppins">Numero*</label>
                                <input type="text" id="number" name="number"
                                    class="block p-3 w-full text-lg text-black rounded-[30px] border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="Tu numero" required>
                            </div>
                            <div>
                                <label for="subject"
                                    class="block mb-2 text-xl font-bold text-black font-Poppins">Asunto*</label>
                                <input type="text" id="subject" name="subject" 
                                    class="block p-3 w-full text-lg text-black rounded-[30px] border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="Quiero ser parte del circulo" required>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-xl font-bold text-black font-Poppins">Dejanos tu
                                mensaje*</label>
                            <textarea id="message" rows="6" id="message" name="message"
                                class="block p-2.5 w-full text-lg text-black rounded-[30px] shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Hola, me gustaría hablar sobre..." required></textarea>
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-lg font-medium text-center self-center text-white rounded-[30px] bg-black sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300 hover:bg-slate-800">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('contacto.acordion')
    <div class="mt-[12rem]">
        @include('include.footer')
    </div>
@endsection
