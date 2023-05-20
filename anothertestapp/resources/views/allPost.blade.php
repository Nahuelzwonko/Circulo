@extends('master')
@section('titulo', 'Noticias | CKFM')
@section('contenido')
@section('Encabezado', 'Nuestro blog')
@section('content')
@include('posts.blog')
@include('include.cta')
@include('include.footer')
@endsection
