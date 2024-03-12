@extends('layout')
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">Editar persona</h1>
        <form action="{{ route('kine.update', $kine) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $kine->nombre }}" class="border rounded-md px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4" class="border rounded-md px-3 py-2 w-full">{{ $kine->descripcion }}</textarea>
            </div>
            <div class="mb-4">
                <label for="facebook_url" class="block text-gray-700 text-sm font-bold mb-2">Facebook URL:</label>
                <input type="text" name="facebook_url" id="facebook_url" value="{{ $kine->facebook_url }}" class="border rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="instagram_url" class="block text-gray-700 text-sm font-bold mb-2">Instagram URL:</label>
                <input type="text" name="instagram_url" id="instagram_url" value="{{ $kine->instagram_url }}" class="border rounded-md px-3 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="twitter_url" class="block text-gray-700 text-sm font-bold mb-2">Twitter URL:</label>
                <input type="text" name="twitter_url" id="twitter_url" value="{{ $kine->twitter_url }}" class="border rounded-md px-3 py-2 w-full">
            </div>

            <!-- Agrega más campos del formulario si es necesario -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
        </form>