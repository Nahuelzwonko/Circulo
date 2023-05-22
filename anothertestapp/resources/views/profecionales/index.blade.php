@extends('master')
@section('titulo', 'Profecionales asociados | CKFM')
@section('Encabezado', 'Personal asociado')
@section('cont', '')
@section('content')
    <section class="h-[100vh] flex justify-center mt-20">

        <div class="w-[80%] relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
                <div>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-users"
                        class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for users">
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Domicilio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Especialidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telefono
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($person))
                        <td>
                            <p>Nombre: {{ $person->nombre }}</p>
                        </td>
                        <td>
                            <p>Domicilio: {{ $person->domicilio }}</p>
                        </td>
                        <td>
                            <p>Teléfono: {{ $person->telefono }}</p>
                        </td>
                        <td>
                            <p>Especialidad: {{ $person->especialidad }}</p>
                        </td>
                    @else
                        <td>
                            <p>No se encontraron datos de la persona.</p>
                        </td>
                    @endif

                </tbody>

            </table>
        </div>
    </section>


@endsection
