@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@section('content')
<div class="py-12">
    <div class="w-[80%] mx-auto sm:px-6 lg:px-8">
        <h1 class="font-hammersmith text-5xl text-center py-8 capitalize"> </h1>
        <h1 class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight  md:text-5xl lg:text-6xl text-white">
            Cargar <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500 uppercase"> Sorteos</mark>
        </h1>

    </div>

    <form action="{{ route('admin.sorteos.store') }}" method="post" enctype="multipart/form-data" class="max-w-sm mx-auto mt-12">
        @csrf
        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del sorteo</label>
            <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" id="nombre" name="nombre" required>
        </div>
        <div class="mb-5">
            <label for="imagen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen del sorteo</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
        </div>
        <div class="mb-5">
            <label for="inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio del sorteo</label>
            <input type="datetime-local" datepicker datepicker-format="mm/dd/yyyy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="inicio" name="inicio" required>
        </div>
        <div class="mb-5">
            <label for="fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fin del sorteo</label>
            <input type="datetime-local" id="fin" name="fin" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">

            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                <label for="datos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Datos del sorteo</label>
                <textarea id="datos" name="datos" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Aquí escribir los datos del sorteo..." required></textarea>
            </div>

        </div>
        <div class="w-full flex justify-center items-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-lg px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar sorteo</button>
        </div>
    </form>
</div>
@endsection