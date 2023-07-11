@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@include('admin.include.nav')
@section('content')
    <div class="p-4 sm:ml-64 ">
        <div class="py-12">
            <div class="w-[80%] mx-auto sm:px-6 lg:px-8">
                <h1 class="font-hammersmith text-5xl text-center py-8 capitalize">empresas asociadas</h1>
                <div class="flex justify-end my-12">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        <div class="flex flex-row items-center justify-center gap-2">
                            <p class="fa-solid fa-plus"></p>
                            <p class="font-Poppins">Agregar</p>
                        </div>

                    </button>
                </div>
                
                


        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-1 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Upload a Kine</h3>
                        <form class="space-y-6" action="{{ route('kine.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="nombre"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la
                                    empresa</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter the name" required>
                            </div>
                            <div>
                                <label for="foto"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo de la
                                    empresa</label>
                                <input type="file" name="foto" id="foto"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="descripcion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ofertas de la
                                    empresa</label>
                                <textarea name="descripcion" id="descripcion" rows="3"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter the description" required></textarea>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <table class="w-full text-lg text-justify text-gray-500 dark:text-gray-400 ">
                <thead class="text-xl font-Poppins text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col"
                            class="px-2 py-1 text-center font-bold text-gray-700 dark:text-gray-400 uppercase tracking-wider">
                            Nombre</th>
                        <th scope="col"
                            class="px-2 py-1 text-center font-bold text-gray-700 dark:text-gray-400 uppercase tracking-wider">
                            Descripción</th>
                        <th scope="col"
                            class="px-2 py-1 text-center font-bold text-gray-700 dark:text-gray-400 uppercase tracking-wider">
                            Imagen</th>
                        
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-600">
                    @foreach ($kines as $kine)
                        <tr>
                            <td class="px-2 py-2 whitespace-nowrap text-center uppercase">{{ $kine->nombre }}</td>
                            <td class="px-2 py-2 whitespace-nowrap text-center ">{{ Str::limit($kine->descripcion, 30) }}</td>
                            <td class="px-2 py-2 whitespace-nowrap text-center ">
                                <img class="mx-auto" src="{{ Storage::url($kine->foto) }}" class="w-[95px]" alt="imagen" />
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap text-center ">
                                <form action="{{ route('kine.destroy', $kine) }}" method="POST"
                                    onsubmit="return confirm('¿Estás seguro de eliminar esta empresa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white font-light bg-red-600 hover:bg-red-800 rounded-full px-4 py-2">Eliminar</button>
                                </form>
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap text-center ">
                                <a href="{{ route('kine.edit', $kine) }}"
                                    class="text-white font-light bg-blue-600 hover:bg-blue-800 rounded-full px-4 py-2">Editar</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


    </div>
    <script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
 @endsection
