@extends('users.layouts.template')
@section('title', 'Bienvenido')
@include('users.include.nav')
@section('content')
    <div class="p-8 mt-14 flex justify-center items-center">
        <div class="card">
            <div class="card__front card__part">
                <div class="w-full flex justify-end mt-[50%]">
                    <div class="card__space-75">
                        <span class="card__label"></span>
                        <div class="flex w-full justify-end ">
                            <p class="card__info">{{ $username }}</p>
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
    <article class="max-w-none format lg:format-lg format-red">
        <div class="w-full flex justify-center text-center">
            <h1 class="font-bold text-4xl mb-5"> <span class="text-[#546EF3]">KINE</span> <span
                    class="text-[#F28F1C]">CLUB</span></h1>
        </div>
        <div class="w-full flex justify-center text-center">
            <div class="w-[80%] ">
                <p class="lead text-black text-xl">Ahora puedes disfrutar de los increíbles beneficios de KineClub
                    directamente en tu dispositivo.<br> <span class="text-xl">¡Sin necesidad de llevar la tarjeta física contigo!</span> </p>
            </div>
        </div>


    </article>

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
                class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
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

    <div class="text-white bg-[6875F5] ">
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
                        class="py-4 px-6  bg-orange-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Hablemos
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('users.include.footer')
@endsection
