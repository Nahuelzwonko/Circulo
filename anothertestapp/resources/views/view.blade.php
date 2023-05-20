@extends('master')
@section('title', 'Vista de la noticia | CKFM')
@section('content')
@section('Encabezado', 'Nuestro blog')
@section('content')
<div class="h-[200vh] mt-20">
@include('posts.view')
</div>
@include('include.cta')
@include('include.footer')  

@endsection