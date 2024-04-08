@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@section('content')
<div class="py-12">
    <form action="{{ route('admin.sorteos.update', $sorteo) }}" method="POST" class="max-w-sm mx-auto mt-12">
        @csrf
        @method('PUT')

        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre del sorteo</label>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="nombre" name="nombre" value="{{ $sorteo->nombre }}">
        </div>
        <div class="mb-5">
            <label for="imagen" class="block mb-2 text-sm font-medium text-white">Imagen del sorteo</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
        </div>
        <div class="mb-5">
            <label for="inicio" class="block mb-2 text-sm font-medium text-white">Inicio del sorteo</label>
            <input type="date" datepicker datepicker-format="mm/dd/yyyy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="inicio" name="inicio" value="{{ $sorteo->inicio }}">
        </div>
        <div class="mb-5">
            <label for="fin" class="block mb-2 text-sm font-medium text-white">Fin del sorteo</label>
            <input type="date" datepicker datepicker-format="mm/dd/yyyy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="fin" name="fin" value="{{ $sorteo->fin }}">
        </div>
        <div class="mb-5">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                    <label for="datos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Datos del sorteo</label>
                    <textarea v-pre class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" id="datos" name="datos">{!! $sorteo->datos !!}</textarea>
                </div>
            </div>
        </div>

        <div class="flex w-full justify-center items-center">
            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar sorteo</button>
        </div>
    </form>
</div>
@endsection