@extends('master')
@section('titulo', 'Obras sociales | CKFM')
@section('Encabezado', 'obras sociales')
@section('cont', '')
@section('Boton', '')
@section('content')
@include('obras.sociales')
<section class="w-full h-screen flex justify-center items-center">
  <div class="flex flex-wrap justify-center w-[70%] ">
    @foreach ($datos as $dato)
      <div class="relative group w-full md:w-1/1 lg:w-1/2 xl:w-1/3 p-6">
        <div class="w-full h-full border rounded-xl shadow-xl flex justify-center items-center">
        <img class="w-full h-auto object-cover rounded-lg" src="{{ asset($dato->imagen) }}" alt="{{ $dato->nombre }}" />
        <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 backdrop-filter backdrop-blur">
          <h5 class="text-black text-lg font-bold">{{ $dato->nombre }}</h5>
          <p class="text-black">{{ $dato->descripcion }}</p>
        </div>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
