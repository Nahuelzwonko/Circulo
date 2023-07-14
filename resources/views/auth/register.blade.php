@extends('layouts.temregister')
@section('titulo', 'registro | CKFM')
@section('contenido')
@section('form')
    
            
            <form method="POST" action="{{ route('register') }}" >
                @csrf
                <h1 class="text-2xl text-center  w-full mb-8 font-bold uppercase">Registrate</h1>
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')"  />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')"  />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')"  />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')"  />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-around mt-4">
                    <a class="underline text-sm     " href="{{ route('login') }}">
                        {{ __('Ya estas registrado?') }}
                    </a>

                    <x-primary-button class="ml-4 bg-orange-600 hover:bg-orange-500">
                        {{ __('Registrarme') }}
                    </x-primary-button>
                </div>
            </form>
        
    
   
@endsection
   

