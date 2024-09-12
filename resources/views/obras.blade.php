@extends('master')
@section('titulo', 'Obras sociales | CKFM')
@section('Encabezado', 'obras sociales')
@section('cont', '')
@section('Boton', '')
@section('content')

     <div class="py-16 mt-40">
        <div class="mx-auto px-6 max-w-6xl text-gray-500">
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @php
                    $datosOrdenados = $datos->sortByDesc('created_at');
                @endphp
                @foreach ($datosOrdenados as $dato)
                    <div class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 flex items-center justify-center" style="margin-right: 10px; margin-bottom: 10px;">
                        <div class="relative">
                            <img src="{{ asset($dato->imagen) }}" alt="ImagenDeCKFM">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('include.cta')
    @include('include.footer')
@endsection








<!-- Hola esto es una pruba -->