@extends('master')
@section('titulo', 'Obras sociales | CKFM')
@section('Encabezado', 'obras sociales')
@section('cont', '')
@section('Boton', '')
@section('content')
    <div class="mt-5 lg:mt-20">
        @include('obras.emp')
    </div>

    @include('include.cta')
    @include('include.footer')
@endsection
