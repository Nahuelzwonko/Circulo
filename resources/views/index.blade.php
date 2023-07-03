@extends('layout')
@section('title', 'Inicio | CKFM')
@section('content')
    @include('include.header')
    @include('home.emp')
    @include('home.quienes')
    @include('home.se')
    @include('home.kine')
    @include('home.parte')
    @include('include.cta')
    @include('include.footer')

@endsection
