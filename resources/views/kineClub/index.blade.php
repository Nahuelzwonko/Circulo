@extends('master')
@section('titulo', 'KINE CLUB | CKFM')

@section('Encabezado', 'KineClub')
@section('cont', 'Tarjeta de Beneficios Círculo de Kinesiólogos y Fisioterapeutas de Mendoza' )
@section('Boton', 'Conocéla')   



@section('content')

@include('kineClub.tarjeta')
@include('kineClub.beneficios')
@include('include.cta')
@include('include.footer') 
@endsection