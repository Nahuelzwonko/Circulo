@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@section('content')
    <div class="py-12">
        <div class="w-[100%] mx-auto sm:px-6 lg:px-8">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none text-center tracking-tight  md:text-5xl lg:text-6xl text-white">
                Nuestras <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500 uppercase"> noticias</mark></h1>
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-6">
                    <button
                        class="  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-lg px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="defaultModal">
                        <div class="flex flex-row items-center justify-center gap-2">
                            <p class="fa-solid fa-plus"></p>
                            <p class="font-Poppins">Agregar</p>
                        </div>
                    </button>
                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                        class="fixed top-1 left-1.5 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="relative w-full max-w-md max-h-full">

                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 w-[150%]">

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

                                    <div class="p-6">

                                        <label for="title"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                                        <input type="text" name="title" id="title"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm ronded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>

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


                                        <label for="image"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen
                                            principal </label>
                                        <input
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            id="file_input" type="file" name="image">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                            SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                                        <label for="pdf"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PDF</label>
                                        <input
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            type="file" name="pdf" accept="application/pdf">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                            Solo archivos .PDF</p>
                                    </div>

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

                <div class="relative overflow-x-auto shadow-md">
                    <table class="w-full text-sm text-left text-gray-400 ">
                        <thead class=" text-white text-center uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Imágen
                                </th>

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

                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Descripción
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                            </svg></a>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Fecha

                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">eliminar</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($posts as $post)
                                <tr class="  bg-gray-800  hover:bg-gray-600">
                                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if ($post->image_url)
                                            <img class="max-w-xs h-auto" src="/storage/{{ $post->image_url }}"
                                                alt="imagen">
                                        @else
                                            {{ $post->id }}
                                        @endif
                                    </th>

                                    <td class="px-6 py-4 font-semibold">
                                        {{ $post->title }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="w-[80px]">{{ $post->body }}</span>
                                    </td>

                                    <td class="px-6 py-4 font-sm">
                                        {{ $post->created_at }}
                                    </td>
                                    <td class="px-6 py-4 gap-4 ">
                                        <div class="flex items-center flex-col-reverse text-start p-3  ">
                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                class="font-medium text-blue-600 hover:text-blue-500 ">Editar
                                            </a>

                                            <a href="{{ route('posts.delete', $post->id) }}"
                                                class="font-medium text-red-500 hover:text-red-400 ">Eliminar</a>
                                        </div>

                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
