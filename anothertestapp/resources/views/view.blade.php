@extends('master')
@section('title', 'Vista de la noticia | CKFM')
@section('content')
@section('Encabezado', 'Nuestro blog')
@section('Boton', 'Informate!')
@section('content')
@include('posts.view')

@include('include.cta')
@include('include.footer')  

@endsection