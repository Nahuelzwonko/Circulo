@extends('layout')
@section('title', 'Inicio | CKFM')
@section('content')
    
    @include('include.hero')
    @include('home.emp')
    @include('home.quienes')
    @include('home.se')
    @include('home.kine')
    @include('home.parte')
    @include('include.cta')
    @include('include.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script> 
@endsection