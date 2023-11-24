@extends('master')
@section('titulo', 'Obras sociales | CKFM')
@section('Encabezado', 'obras sociales')
@section('cont', '')
@section('Boton', '')
@section('content')
    <div class=" mt-5 lg:mt-40 w-full">
        <div class="grid items-center grid-cols-1 md:grid-cols-4  gap-1 w-auto h-auto  ">
            @foreach ($datos as $dato)
                <div class="flex  items-center h-[300px] w-[300px] ">
                    <img class="max-w-full h-auto rounded-lg" src="{{ asset($dato->imagen) }}" alt="">
                </div>
            @endforeach

        </div>
    </div>
    @include('include.cta')
    @include('include.footer')
@endsection
