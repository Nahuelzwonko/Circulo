@extends('master')
@section('titulo', 'Obras sociales | CKFM')
@section('Encabezado', 'obras sociales')
@section('cont', '')
@section('Boton', '')
@section('content')
    <!-- <div class=" mt-5 lg:mt-40 w-full">
        <div class="grid items-center grid-cols-1 md:grid-cols-4  gap-1 w-auto h-auto  ">
            @foreach ($datos as $dato)
                <div class="flex  items-center h-[300px] w-[300px] ">
                    <img class="max-w-full h-auto rounded-lg" src="{{ asset($dato->imagen) }}" alt="">
                </div>
            @endforeach

        </div>
    </div> -->
    <!-- component -->
<section>
    <div class="py-16">
        <div class="mx-auto px-6 max-w-6xl text-gray-500">
            <div class="text-center">
                <h2 class="text-3xl text-gray-950 dark:text-white font-semibold">Quickstart with boilerplates</h2>
                <p class="mt-6 text-gray-700 dark:text-gray-300">Harum quae dolore inventore repudiandae? orrupti aut temporibus ariatur.</p>
            </div>
            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 flex items-center justify-center ">
                    <div aria-hidden="true" class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2  to-white dark:from-white dark:to-white blur-2xl opacity-25 "></div>
                    <div class="relative">
                        <img src="https://kinesiologosmza.com/storage/imagenes/vYJZHxebEF5hGOBNFJFnRaLUYOY2S9HHYtgaAdYr.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('include.cta')
    @include('include.footer')
@endsection
