@extends('master')
@section('titulo', 'Contacto | CKFM')
@section('Encabezado', 'Contacto')
@section('cont', '')
@section('content')
    <section class="bg-white">
        <div class="grid grid-cols-2">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <div class="flex justify-center items-center">
                    <h1 class="text-black font-custom text-[50px]">HABLEMOS</h1>
                </div>
                <div class="py-4  flex justify-center ">
                    <div class="w-[50%] font-Poppins text-black text-[15px]">
                        <p>Envíanos un correo electrónico o inicia una conversación llenando el siguiente formulario.</p>
                    </div>
                </div>
                <div class="py-4 flex justify-center items-center">
                    <div class="w-[50%]">
                        <h2 class="font-costom text-black text-[20px]">¡Contáctenos directamente!</h2>
                    </div>
                </div>
                <div class="space-y-4 ">
                    <div class="flex w-full justify-center items-center py-2">
                        <div class="flex flex-col items-center rounded-[10px] w-[50%] h-[80px] bg-blue-700">
                            <h1 class="text-center text-white font-Poppins">Email</h1>
                            <p class="text-center text-white font-Poppins">administracion@kinesiologosmza.com.ar</p>
                        </div>
                    </div>
                    <div class="flex w-full justify-center items-center py-2">
                        <div class="flex flex-col items-center justify-center rounded-[10px] w-[50%] h-[80px] bg-blue-700">
                            <h1 class="text-center text-white font-Poppins">Teléfono</h1>
                            <p class="text-center text-white font-Poppins">0261 4298915</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                    <form action="#" class="space-y-8">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-black font-Poppins">Nombre*</label>
                                <input type="text" id="name"
                                    class="shadow-sm border border-gray-300 text-black text-sm rounded-[30px] focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="Tu nombre" required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-black font-Poppins">Email*</label>
                                <input type="email" id="email"
                                    class="shadow-sm border border-gray-300 text-black text-sm rounded-[30px] focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="tucorreo@correo.com" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="number"
                                    class="block mb-2 text-sm font-medium text-black font-Poppins">Numero*</label>
                                <input type="text" id="number"
                                    class="block p-3 w-full text-sm text-black rounded-[30px] border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="Tu numero" required>
                            </div>
                            <div>
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-black font-Poppins">Asunto*</label>
                                <input type="text" id="subject"
                                    class="block p-3 w-full text-sm text-black rounded-[30px] border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="Let us know how we can help you" required>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-black font-Poppins">Dejanos tu
                                mensaje*</label>
                            <textarea id="message" rows="6"
                                class="block p-2.5 w-full text-sm text-black rounded-[30px] shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Hola, me gustaría hablar sobre cómo..."></textarea>
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-center text-white rounded-[30px] bg-black sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300">Enviar</button>
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
