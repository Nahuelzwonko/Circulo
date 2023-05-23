<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Agregar empresa
        </button>
    </x-slot>
    {{-- modal --}}
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-1 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100% - 1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Subir empresa
                    </h3>
                                        <div class="px-6 py-6 lg:px-8">
                        <form class="space-y-6" action="{{ route('datos.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="field">
                                <label for="nombre"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name
                                    company</label>
                                <div class="control">
                                    <input type="text" name="nombre" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Code Huit" required>
                                </div>
                                <label for="descripcion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark.text-gray-900 dark:text-gray-300">descripcion</label>
                                <textarea name="descripcion" id="descripcion" rows="4"
                                    class="block mb-2 text-sm font-medium text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"cols="30"
                                    rows="10"></textarea>
                                <label for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">imagen</label>
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 corsor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    type="file" name="imagen" required>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="staticModal" type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subir</button>
                            </div>
                        </form>
                    </div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    {{-- modal body --}}

                </div>
            </div>
        </div>
    </div>
    {{-- tabla --}}
    <div class="w-full flex justify-center">
        <div class="relative overflow-x-auto">
            <table class="w-[80%] text-sm text-left text-black dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-20 py-5 text-left text-xs font-medium text-black uppercase tracking-wider">
                            Nombre
                        </th>
                        <th class="px-20 py-5 text-left text-xs font-medium text-black uppercase tracking-wider">
                            Imagen
                        </th>
                        <th class="px-20 py-5 text-left text-xs font-medium text-black uppercase tracking-wider">
                            Descripcion</th>
                        <th class="px-20 py-5 text-left text-xs font-medium text-black uppercase tracking-wider">
                            Eliminar
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y ">
                    @foreach ($datos as $dato)
                        <tr>
                            <td class="px-20 py-5 whitespace-nowrap">{{ $dato->nombre }}</td>
                            <td class="px-20 py-5 whitespace-nowrap">
                                <img src="{{ asset($dato->imagen) }}" alt="{{ $dato->nombre }}"
                                    class="h-10 w-15">
                            </td>
                            <td class="px-20 py-5 whitespace-nowrap">{{ $dato->descripcion }}</td>
                            <td class="px-20 py-5 whitespace-nowrap">
                                <form action="{{ route('datos.destroy', $dato->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
