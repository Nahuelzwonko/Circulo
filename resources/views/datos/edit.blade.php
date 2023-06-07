@extends('layout')

@section('content')
    <div class="flex justify-center items-center h-[100vh]">
        <div class="w-full max-w-md">
            <div class="flex w-full justify-center">
                <h1 class="text-2xl font-bold mb-6">Editar Dato</h1>
            </div>
            <form action="{{ route('datos.update', $dato->id) }}" method="POST" enctype="multipart/form-data"
                onsubmit="return confirm('¿Estás seguro de guardar los cambios?')">
                @csrf
                @method('PUT')
                <label for="nombre" class="block mb-2">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="w-full border border-gray-300 rounded px-3 py-2"
                    value="{{ $dato->nombre }}" required>

                <label for="imagen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen:</label>
                <input type="file" aria-describedby="file_input_help" id="imagen" name="imagen"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Deja vacío si no deseas
                    cambiar la imagen actual.</p>

                <label for="descripcion" class="block mb-2">Descripción:</label>
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <textarea id="descripcion" name="descripcion" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400">{{ $dato->descripcion }}</textarea>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Guardar
                    cambios</button>
            </form>
        </div>
    </div>
@endsection
