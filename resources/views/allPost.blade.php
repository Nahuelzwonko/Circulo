@extends('master')
@section('titulo', 'Noticias | CKFM')
@section('contenido')
@section('Encabezado', 'Nuestro espacio')
@section('cont', 'En este espacio de noticias podés mantenerte actualizado sobre eventos del CKFM y novedades de nuestra profesión.')
@section('content')
@section('Boton', 'Informate!')
<div class="mt-5 lg:mt-20">
    @include('posts.blog')
</div>
@include('include.cta')
@include('include.footer')
@endsection
