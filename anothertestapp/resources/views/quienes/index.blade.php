@extends('master')
@section('titulo', 'Quienes somos | CKFM')
@section('Encabezado', 'Quienes somos')
@section('cont', 'aca va el encabezado ')
@section('content')
  @include('quienes.mision')
  @include('quienes.valores')
  @include('quienes.comision')
  @include('include.cta')
  @include('include.footer')
@endsection

