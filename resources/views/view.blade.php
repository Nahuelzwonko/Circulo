@extends('master')
@section('title', 'Vista de la noticia | CKFM')
@section('content')
@section('Encabezado', 'Nuestro blog')
@section('cont', 'Explora nuestro blog de noticias para mantenerte actualizado sobre avances, descubrimientos y novedades en kinesiología y fisioterapia. Te brindamos información relevante y consejos prácticos para cuidar tu salud y bienestar de forma óptima. Únete a la conversación, comparte tus comentarios y juntos promovamos una vida activa y saludable. Aprendamos y crezcamos juntos.')
@section('Boton', 'Informate!')
@section('content')
@include('posts.view')
@include('include.cta')
@include('include.footer')  

@endsection