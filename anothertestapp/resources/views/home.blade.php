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
@endsection