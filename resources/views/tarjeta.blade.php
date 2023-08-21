@extends('users.layouts.template')
@section('title', 'Bienvenido')
@include('users.include.nav')
@section('content')
    <div class="w-full flex justify-center mt-5 mb-10">
        <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
    </div>
    <article class="max-w-none format lg:format-lg format-red">
        <div class="w-full flex justify-center text-center">
            <h1 class="font-bold text-4xl mb-5"> <span class="text-[#546EF3]">KINE</span> <span
                    class="text-[#F28F1C]">CLUB</span></h1>
        </div>
        <div class="w-full flex justify-center text-center">
            <div class="w-[80%] ">
                <p class="lead text-black text-xl">Ahora puedes disfrutar de los increíbles beneficios de KineClub
                    directamente en tu dispositivo.<br> <span class="text-xl">¡Sin necesidad de llevar la tarjeta física
                        contigo!</span> </p>
            </div>
        </div>
    </article>
    @if (session('tarjeta_activada'))
        <div class="w-full flex text-center justify-center items-center">

            <div id="alert-3"
                class="w-80 flex items-center justify-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 "
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    Trajeta activada con exito
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5  text-red-500 rounded-lg inline-flex items-center justify-center h-8 w-8 "
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="p-8 mt-14 flex justify-center items-center">

        <div class="card">
            <div class="card__front card__part">
                <div class="w-full flex justify-end font-bold mt-[8rem]">
                    <div class="card__space-75">
                        <span class="card__label"></span>
                        <div class="flex w-full justify-end -mb-1">
                            @if ($user)
                                <p class="card__info">{{ $user->nameTarjet }}</p>
                            @endif
                        </div>
                        <div class="flex w-full justify-end ">
                            @if ($user)
                                <p class="card__info">{{ $user->dni }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card__space-25">
                </div>
            </div>
            <div class="card__back card__part">
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center">
        @if (!$user->nameTarjet || !$user->dni)
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                Activar mi tarjeta
            </button>
        @endif
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl text-center font-medium text-gray-900 dark:text-white">Activar mi KineClub
                        </h3>
                        <form class="space-y-6" action="{{ route('tarjeta.activate') }}" method="POST">
                            @csrf
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre y
                                    apellido*</label>
                                <input type="name" name="name" id="name" placeholder="Nombre completo"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                                    DNI*</label>
                                <input type="number" name="number" id="number" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Activar
                                tarjeta</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-wrap items-center justify-center gap-8 text-center sm:flex mb-10">
        <div class="w-full px-4 py-4 mt-6 bg-blue-500 rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 ">
            <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                        </path>
                    </svg>
                </div>
            </div>
            <h3 class="py-4 text-2xl font-semibold  sm:text-xl text-white">
                Descuentos exclusivos
            </h3>
            <p class="py-4 text-white text-md ">
                Obtén increíbles descuentos en salud, hoteles, actividades deportivas, moda, belleza y bienestar. Ahorra
                mientras disfrutas al máximo
            </p>
            <button type="button"
                class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="https://www.kinesiologosmza.com/kineClub">Conocer los beneficios</a>
            </button>
        </div>
        <div
            class="w-full px-4 py-4 mt-6 bg-blue-500 rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 sm:mt-16 md:mt-20 lg:mt-24 ">
            <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                        </path>
                    </svg>
                </div>
            </div>
            <h3 class="py-4 text-2xl font-semibold  sm:text-xl text-white">
                Acceso fácil y rápido
            </h3>
            <p class="py-4 text-white text-md dark:text-gray-300">
                Olvídate de la tarjeta física. Accede a los beneficios con un solo clic desde tu dispositivo. ¡Más
                conveniente y rápido que nunca!
            </p>
            <button type="button"
                class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="https://www.kinesiologosmza.com/kineClub">Conocer los beneficios</a>
            </button>
        </div>
        <div class="w-full px-4 py-4 mt-6 bg-blue-500 rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 ">
            <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                    <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                        </path>
                    </svg>
                </div>
            </div>
            <h3 class="py-4 text-2xl font-semibold  sm:text-xl text-white">
                Promociones actualizadas
            </h3>
            <p class="py-4 text-white text-md ">
                No te pierdas nuestras ofertas especiales, paquetes exclusivos y eventos únicos para los miembros de
                KineClub. Siempre tendrás algo emocionante por descubrir.
            </p>
            <button type="button"
                class="text-white bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="https://www.kinesiologosmza.com/kineClub">Conocer los beneficios</a>
            </button>
        </div>
    </div>
    <div class="text-white bg-blue-500 ">
        <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
            <h2 class="text-3xl font-extrabold  sm:text-4xl">
                <span class="block">
                    ¡Estemos siempre conectados!
                </span>

            </h2>
            <p class="text-xl mt-4 max-w-md mx-auto text-white">
                Desde el círculo de Kinesiólogos y fisioterapeutas, nos importas. Por eso, estamos a tu disposición.
            </p>
            <div class="lg:mt-0 lg:flex-shrink-0">
                <div class="mt-12 inline-flex rounded-md shadow">
                    <button type="button"
                        class="py-4 px-6  bg-green-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Hablemos
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('users.include.footer')
@endsection
