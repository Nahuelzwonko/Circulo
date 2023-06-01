<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="w-[80%] mx-auto py-8">
        <h1 class="font-hammersmith text-5xl text-center py-8">Personal Asociado</h1>
        <div class="flex justify-end">
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xl px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <div class="flex flex-row items-center justify-center gap-2">
                    <p class="fa-solid fa-plus"></p>
                    <p class="font-Poppins">Agregar</p>
                </div>
            </button>
        </div>
        
    </div>
    <!-- Main modal-->
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-1 left-1 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-[80%] max-w-2xl max-h-full">
            {{-- Modal content  --}}
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Agregar personal
                    </h3>
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
                </div>
                <div class="px-6 py-3 ">
                    <form class="" action="{{ route('people.store') }}" method="POST">
                        @csrf
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="nombre">Nombre y Apellido*</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                type="text" name="nombre" id="nombre">
                        </div>
                        {{-- domicilio --}}
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="domicilio">Domicilio (Consultorio)</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                type="text" name="domicilio" id="domicilio">
                        </div>
                        {{-- atencion domiciliaria --}}
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="at">Atencion domicilaria</label>

                            <select name="accion" id="accion"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                @foreach ($accion as $item)
                                    <option value="{{ $item }}" {{ old('accion') == $item ? 'selected' : '' }}>
                                        @if ($item)
                                            Sí
                                        @else
                                            No
                                        @endif
                                    </option>
                                @endforeach
                            </select>

                        </div>
                        {{-- email --}}
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="email">email</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                type="text" name="email" id="email">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="localidad">Localidad</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                name="localidad" id="localidad">
                                @foreach ($localidades as $localidad)
                                    <option value="{{ $localidad }}"
                                        {{ old('localidad') == $localidad ? 'selected' : '' }}>{{ $localidad }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="telefono">Teléfono</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                type="text" name="telefono" id="telefono">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="especialidad">Especialidad</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                type="text" name="especialidad" id="especialidad">
                        </div>
                        <div
                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit" data-modal-hide="defaultModal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                            <button data-modal-hide="staticModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto">
        <table class="w-[85%] mx-auto text-xl text-left text-gray-500 dark:text-gray-400">
            <thead>
                <tr class="font-Poppins uppercase font-bold text-gray-700">
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Nombre</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Email</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Domicilio</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Localidad</th>
                    
                    
                    
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Teléfono</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Especialidad</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Atencion domiciliaria</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $person->nombre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $person->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $person->domicilio }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $person->localidad }}</td>
                        
                        
                       
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $person->telefono }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{ $person->especialidad }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200 tex">{{ $person->at }}</td>
                        <td>
                            <form action="{{ route('people.destroy', $person->id) }}" method="POST"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta persona?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-2xl px-4"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('people.edit', $person->id) }}"
                                class="text-blue-600 hover:text-blue-800 text-2xl px-4"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/35eba4cb11.js" crossorigin="anonymous"></script>
</x-app-layout>
