@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@include('admin.include.nav')
@section('content')
    <div class="p-4 sm:ml-64 ">
        <div class="py-12">
            <div class="w-[80%] mx-auto sm:px-6 lg:px-8">
                <h1 class="font-hammersmith text-5xl text-center py-8">Noticias</h1>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-end p-6 bg-white border-b border-gray-200">
                        {{-- tag modal --}}
                        <button
                            class="  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="defaultModal">
                            <div class="flex flex-row items-center justify-center gap-2">
                                <p class="fa-solid fa-plus"></p>
                                <p class="font-Poppins">Agregar</p>
                            </div>

                        </button>

                        {{-- main modal --}}
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="fixed top-1 left-1.5 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- modal content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 w-[150%]">
                                        {{-- modal header --}}
                                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:">
                                            <div class="w-full justify-center">
                                                <h3 class="text-xl text-center text-gray-900 dark:text-white">
                                                    Nueva noticia
                                                </h3>
                                            </div>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hove:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="defaulModal">
                                                <span class="sr-only"> cose modal</span>
                                            </button>
                                        </div>
                                        {{-- modal body --}}
                                        <div class="p-6">
                                            {{-- titulo de la noticia --}}
                                            <label for="title"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                                            <input type="text" name="title" id="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm ronded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                            {{-- Resumen de la noticia --}}
                                            <label for="body"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark.text-gray-900 dark:text-gray-300">Descripción
                                                </label>
                                            <div
                                                class="w-full mb-4 mt-3 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                    <textarea name="body" id="body" rows="4" placeholder="Aca escribir el resumen de la noticia"
                                                        class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                                <div
                                                    class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                    <div class="flex pl-0 space-x-1 sm:pl-2">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Cuerpo de la noticia --}}
                                            <label for="cuerpo"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark.text-gray-900 dark:text-gray-300">Descripción
                                                Detallada
                                                </label>
                                            <div
                                                class="w-full mb-4 mt-3 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">

                                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                    <textarea name="cuerpo" id="cuerpo" rows="4" placeholder="Aca escribir la noticia completa"
                                                        class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                <div class="flex pl-0 space-x-1 sm:pl-2">
                                                </div>
                                            </div>

                                            {{-- imagen de la noticia --}}
                                            <label for="image"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen
                                                principal </label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="file_input" type="file" name="image">
                                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                                SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                            {{-- carga de pdf de la noticia --}}
                                            <label for="pdf"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PDF</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                type="file" name="pdf" accept="application/pdf">
                                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                                Solo archivos .PDF</p>
                                        </div>
                                        {{-- modal footer --}}
                                        <div
                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                data-modal-toggle="defautModal" type="submit">Crear</button>
                                            <button
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 "
                                                data-modal-toggle="defautModal" type="button">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- tablas --}}
                    <div class="relative w-full overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-lg text-justify text-gray-500 dark:text-gray-400 ">
                            <thead
                                class="text-xl font-Poppins text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    {{-- id de la tabla --}}
                                    <th scope="col" class="px-6 py-3">
                                        Imágen
                                    </th>
                                    {{--  --}}
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Título
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                    aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    {{-- body --}}
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Descripción
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    {{-- fecha --}}
                                    <th scope="col" class="px-6 py-3">
                                        Fecha

                                    </th>
                                    {{-- date --}}
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">eliminar</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($posts as $post)
                                    {{-- id de la tabla --}}
                                    <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th class="py-1 px-4">
                                            @if ($post->image_url)
                                                <img class="max-w-xs h-auto" src="/storage/{{ $post->image_url }}"
                                                    alt="imagen">
                                            @else
                                                {{ $post->id }}
                                            @endif
                                        </th>
                                        {{-- titulo de la tabla --}}
                                        <td class="py-1 px-4 font-semibold">
                                            {{ $post->title }}
                                        </td>
                                        {{-- contenido o body --}}
                                        <td class="py-1 px-4">
                                            <span class="w-[80px]">{{ $post->body }}</span>
                                        </td>
                                        {{-- fecha data time --}}
                                        <td class="py-1 px-4 font-sm">
                                            {{ $post->created_at }}
                                        </td>
                                        {{-- accion de delete --}}
                                        <td
                                            class="py-1 px-4 flex flex-col-reverse text-center gap-4 w-[70%] mx-auto">
                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                class="text-white font-light bg-red-600 hover:bg-red-800 rounded-full px-4 py-2">Eliminar</a>

                                            <a href="{{ route('posts.delete', $post->id) }}"
                                                class="text-white font-light bg-blue-600 hover:bg-blue-800 rounded-full px-4 py-2">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
@endsection
