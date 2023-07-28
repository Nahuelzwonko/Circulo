@extends('master')
@section('titulo', 'Quienes somos | CKFM')
@section('Encabezado', 'Quiénes somos')
@section('cont', 'En el Círculo de Kinesiólogos y Fisioterapeutas de Mendoza, nos unimos para fortalecer la profesión y proteger los intereses de nuestros socios. Negociamos convenios, promovemos la formación continua y difundimos los beneficios de la kinesiología y la fisioterapia. Únete a nuestra comunidad comprometida con la excelencia y el crecimiento en la salud y el bienestar.')
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

