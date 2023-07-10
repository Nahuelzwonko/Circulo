@extends('master')
@section('titulo', 'Asociate | CKFM')
@section('Encabezado', 'Asociate')
@section('cont', 'Para ser parte del Círculo de Kinesiólogos y Fisioterapeutasde Mendoza')
@section('Boton', '')
@section('content')
    <div class="mt-5 lg:mt-20">
        @include('asociate.form')
    </div>
    @include('include.cta')
    @include('include.footer')
@endsection
