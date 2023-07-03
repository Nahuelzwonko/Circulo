@extends('master')
@section('titulo', 'Noticias | CKFM')
@section('contenido')
@section('Encabezado', 'Nuestro blog')
@section('content')
@section('Boton', 'Informate!')
<div class="mt-5 lg:mt-20">
    @include('posts.blog')
</div>
@include('include.cta')
@include('include.footer')
@endsection
