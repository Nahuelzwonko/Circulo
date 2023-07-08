@extends('master')
@section('titulo', 'Noticias | CKFM')
@section('contenido')
@section('Encabezado', 'Nuestro blog')
@section('cont', 'Explora nuestro blog de noticias para mantenerte actualizado sobre avances, descubrimientos y novedades en kinesiología y fisioterapia. Te brindamos información relevante y consejos prácticos para cuidar tu salud y bienestar de forma óptima. Únete a la conversación, comparte tus comentarios y juntos promovamos una vida activa y saludable. Aprendamos y crezcamos juntos.')
@section('content')
@section('Boton', 'Informate!')
<div class="mt-5 lg:mt-20">
    @include('posts.blog')
</div>
@include('include.cta')
@include('include.footer')
@endsection
