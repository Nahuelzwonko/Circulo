<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- tag modal --}}
                    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
                        Nuevo post
                    </button>
                    {{-- main modal --}}
                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-1 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="relative w-full max-w-md max-h-full">
                                {{-- modal content --}}
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    {{-- modal header --}}
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:">
                                        <h3 class="text-xl text-gray-900 dark:text-white">
                                            Nuevo post
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hove:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaulModal">
                                            <span class="sr-only"> cose modal</span>
                                        </button>
                                    </div>
                                    {{-- modal body --}}
                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            Vamos a crear un nuevo post para nuestro portal. Rellena los campos y pulsa "Crear"
                                        </p>
                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Titulo</label>
                                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm ronded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark.text-gray-900 dark:text-gray-300">Body</label>
                                        <textarea name="body" id="body" rows="4" class="block mb-2 text-sm font-medium text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"cols="30" rows="10"></textarea>
                                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">imagen</label>
                                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 corsor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
                                    </div>
                                    {{-- modal footer --}}
                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-modal-toggle="defautModal" type="submit">Subir</button>
                                        <button class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 " data-modal-toggle="defautModal" type="button">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- tablas --}}
                
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- id de la tabla --}}
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                {{--  --}}
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Title
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                {{-- body --}}
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Body
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                {{-- fecja --}}
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Data time</span>
                </th>
                {{-- date --}}
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">eliminar</span>
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            {{-- id de la tabla --}}
            <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="py-1 px-4">
                    @if ($post->image_url)
                    <img class="max-w-xs h-auto" src="/storage/{{$post->image_url}}" alt="imagen">
                    @else
                    {{$post->id}}
                    @endif
                </th>
                {{-- titulo de la tabla --}}
                <td class="py-1 px-4">
                        {{$post->title}}
                </td>
                {{-- contenido o body --}}
            <td class="py-1 px-4">
                <span class="w-[80px]">{{$post->body}}</span>
            </td>
            {{-- fecha data time --}}
            <td class="py-1 px-4">
                {{$post->created_at}}
            </td>
            {{-- accion de delete --}}
            <td class="py-1 px-4 text-right">
                <a href="{{route('posts.delete', $post->id)}}" class="font-medium text-red-600">Borrar</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>


            </div>
        </div>
    </div>
</x-app-layout>
