@extends('master')
@section('titulo', 'Quienes somos | CKFM')
@section('Encabezado', 'Quienes somos')
@section('cont', 'aca va el encabezado ')
@section('Boton', 'Conocénos')
@section('content')
<div class="mt-5 lg:mt-20">
    @include('quienes.mision')
</div>
  @include('quienes.valores')
  @include('quienes.comision')
  @include('include.cta')
  @include('include.footer')
@endsection

