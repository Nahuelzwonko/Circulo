@extends('users.layouts.template')
@section('title', 'Bienvenido')
@include('users.include.nav')
@section('content')
    <div class="p-4 sm:ml-64">
        
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="card">
                <div class="card__front card__part ">

                    
                    <div class="card__space-75">
                        <span class="card__label">Card holder</span>
                        <p class="card__info">John Doe</p>
                    </div>
                    <div class="card__space-25">
                        
                    </div>
                </div>
                <div class="card__back card__part">
                    
                </div>
            </div>
        </div>
    </div>
@endsection
