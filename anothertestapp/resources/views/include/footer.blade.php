<footer class="bg-white lg:hidden">
    <div class="w-[70%] pt-4 pb-6 mx-auto lg:px-8 lg:pt-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            {{-- logo --}}
            <div>
                <ul class="flex justify-center gap-6 mt-8 md:gap-8 sm:justify-start">
                    <li>
                        <img src="{{ asset('storage/logo/ckfm-logo.svg') }}" alt="foto">
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-8 lg:gap-60 sm:grid-cols-2 lg:col-span-2 md:grid-cols-4">
                {{-- Pages --}}
                <div class="text-center sm:text-left">
                    <p class="font-hammersmith text-3xl  text-black font-bold">Páginas</p>
                    <nav class="mt-8">
                        <ul class="space-y-4 text-sm">
                            <li>
                                <a class="font-Poppins text-black transition" href="/">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a class="font-Poppins text-black transition" href="{{ route('quienes.index') }}">
                                    Quienes somos
                                </a>
                            </li>
                            <li>
                                <a class="font-Poppins  text-black transition" href="/">
                                    Suscribite
                                </a>
                            </li>
                            <li>
                                <a class="font-Poppins text-black transition" href="{{ route('contacto.index') }}">
                                    Contactanos
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- Contacto --}}
                <div class="text-center sm:text-left">
                    <p class="text-3xl font-bold font-hammersmith text-black">Contacto</p>
                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <a class="flex items-center justify-center sm:justify-start gap-1.5 group" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>

                                <span class="font-Poppins text-black transition group-hover:text-white/75">
                                    {{-- presidencia@kinesiologosmza.com --}}
                                    pruebas
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center justify-center sm:justify-start gap-1.5 group" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>

                                <span class="text-black font-Poppins transition group-hover:text-white/75">
                                    0123456789
                                </span>
                            </a>
                        </li>

                        <li class="flex items-start justify-center gap-1.5 sm:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <address class="-mt-0.5 font-Poppins text-black">
                                Eusebio Blanco 148, Mendoza.
                            </address>
                        </li>
                    </ul>
                </div>
                {{-- newsletter --}}
                <div class="text-center sm:text-left">
                    <p class="text-3xl font-bold font-hammersmith text-black">Newsletter</p>
                    <ul class="mt-3 space-y-4 text-sm">
                        <div class="pt-3 flex items-center">
                            <input type="text"
                                class="font-Poppins rounded-[30px] border border-black-600 py-[0.5] pr-8 lg:pr-20 mr-4"
                                placeholder="Ingresa tu correo..">
                            <button
                                class="font-Poppins bg-black hover:bg-slate-700 text-white px-3 p-2 rounded-[30px] ">Submit</button>
                        </div>
                        <li>
                            <div class='flex gap-4 p-2 rounded-md social-wrapper'>
                                <a href=""><img src="{{ asset('storage/iconos/ig.svg') }}"></a>
                                <a href=""><img src="{{ asset('storage/iconos/fb.svg') }}"></a>
                                <a href=""><img src="{{ asset('storage/iconos/lk.svg') }}"></a>
                                <a href=""><img src="{{ asset('storage/iconos/tw.svg') }}"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- copy --}}
        <div class="pt-6 mt-12 ">
            <div class="text-center sm:flex sm:justify-between sm:text-left">
                <p class="text-sm text-black">
                    <span class="block sm:inline">Powered by</span>

                    <a class="inline-block text-black-500  transition hover:text-teal-500/75 text-decoretion-none"
                        href="/">
                        CODE
                    </a>
                    <a class="inline-block text-[#741CF9]  transition hover:text-black-500/75" href="/">
                        HUIT
                    </a>
                </p>

                <p class="mt-4 text-sm text-black sm:order-first sm:mt-0">
                    &copy; 2023 Circulo de Kinesiologos y Fisioterapeutas Mendoza
                </p>
            </div>
        </div>
    </div>
</footer>

<footer class="my-4 pt-8 hidden lg:inline h-100%">
    <div class="flex flex-col justify-center gap-10 font-Poppins">
        <div class="flex flex-col lg:flex-row justify-evenly">
            <img src="{{ asset('storage/logo/ckfm-logo.svg') }}" alt="foto">
            <div class="flex flex-col gap-8">
                <h1 class="font-bold text-4xl font-sans">Páginas</h1>
                <ul class="flex flex-col gap-4 text-lg font-bold">
                    <li><a class="hover:text-slate-500" href="/">Inicio</a></li>
                    <li><a class="hover:text-slate-500" href="{{ route('quienes.index') }}">Quienes Somos</a></li>
                    <li><a class="hover:text-slate-500" href="{{ route('kine.index') }}">Kine Club</a></li>
                    <li><a class="hover:text-slate-500" href="{{ route('contacto.index') }}">Contactate</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-6">
                <h1 class="font-bold text-4xl font-sans">Contacto</h1>
                <ul class="flex flex-col gap-4 text-lg font-bold">
                    <li><a class="hover:text-slate-500" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-black shrink-0 inline mr-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>presidencia@kinesiologosmza.com</a></li>
                    <li><a class="hover:text-slate-500" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-black shrink-0 inline mr-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg> +54123654789</a></li>
                    <li><a class="hover:text-slate-500" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-black shrink-0 inline mr-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>Eusebio Blanco 148, Mendoza.</a></li>

                </ul>


            </div>
            <div class="flex flex-col gap-8">
                <h1 class="font-bold text-4xl font-sans">Newsletter</h1>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row">
                        <input type="text"
                            class="font-Poppins rounded-[30px] border border-black-600 py-[0.5] pr-8 lg:pr-20 mr-4"
                            placeholder="Ingresa tu correo..">
                        <button
                            class="font-Poppins bg-black hover:bg-slate-700 text-white px-3 p-2 rounded-[30px] ">Submit</button>
                    </div>
                    <div class="flex flex-row gap-4">
                        <a href=""><img src="{{ asset('storage/iconos/ig.svg') }}"></a>
                        <a href=""><img src="{{ asset('storage/iconos/fb.svg') }}"></a>
                        <a href=""><img src="{{ asset('storage/iconos/lk.svg') }}"></a>
                        <a href=""><img src="{{ asset('storage/iconos/tw.svg') }}"></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="w-full flex flex-col justify-center items-center">
            <div>
                <p class="font-Poppins font-bold mx-auto ">© Copyright circulo de kinesiólogos y fisioterapeutas
                    Mendoza </p>
            </div>
            <div>
                <p class="text-black font-bold">-Powered by Code <span class="text-[#741CF9] font-bold">Huit.</span>
                </p>
            </div>
        </div>
    </div>
</footer>
