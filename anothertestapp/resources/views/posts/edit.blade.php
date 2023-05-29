@extends('layout')

@section('content')
    <div class="flex justify-center items-center h-[100vh]">
        <div class="w-full max-w-md">
            <div class="flex w-full justify-center">
                <h1 class="text-2xl font-bold mb-6">EDITAR NOTICIA</h1>
            </div>
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('¿Estás seguro de guardar los cambios?')">
                @csrf
                @method('PUT')

                <label class="block mb-2" for="title">Título de la noticia</label>
                <input class="w-full border border-gray-300 rounded px-3 py-2" type="text" name="title"
                    value="{{ $post->title }}">

                <label class="block mb-2" for="body">Contenido (Resumen de la noticia)</label>
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <textarea id="body" rows="4" name="body"
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Contenido">{{ $post->body }}</textarea>
                    </div>
                </div>

                <label class="block mb-2" for="cuerpo">Cuerpo(Noticia completa)</label>
                <textarea class="w-full border border-gray-300 rounded px-3 py-2" name="cuerpo" rows="4">{{ $post->cuerpo }}</textarea>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Imagen:</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="file_input" type="file" name="image">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                    800x400px).</p>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="pdf">PDF:</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    type="file" name="pdf">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Por favor solo cargar archivos
                    .PDF</p>

                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">Guardar
                    cambios</button>
            </form>
        </div>
    </div>
@endsection
