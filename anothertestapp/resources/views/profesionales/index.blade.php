@extends('master')
@section('titulo', 'Profesionales asociados | CKFM')
@section('Encabezado', 'Personal asociado')

@section('cont', 'Aquí encontraras a cada uno de los profesionales asociados. Te invitamos a utilizar los filtros para agilizar tu búsqueda.')
@section('Boton', 'Infórmate')
@section('content')
    <section class="h-[100vh] flex flex-col items-center mt-20">
        <h1 class="font-hammersmith text-7xl">Búsqueda</h1>
        <div class="w-[80%] relative overflow-x-auto  sm:rounded-lg">
            <div class="flex flex-col lg:flex-row-reverse justify-evenly items-center px-8 mt-8 lg:py-20">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-lg font-medium text-gray-900 dark:text-gray-300 ">Atención Domiciliaria</label>
                </div>
                {{--  --}}
                <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
                    <div>
                    </div>
                    <label for="table-search" class="sr-only"></label>
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
                            class="block p-2 pl-10 text-lg text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar por nombre o localidad">
                    </div>
                </div>
            </div>
          
            <table class="w-full text-left text-gray-500 dark:text-gray-400 text-lg">
                <thead
                    class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-[1px] border-slate-300">
                    <tr class="">
                        <th scope="col" class="px-6 py-4">
                            <i class="fa-solid fa-user mr-2"></i>Nombre
                        </th>
                        <th scope="col" class="px-6 py-4 invisible lg:visible">
                            <i class="fa-solid fa-sharp fa-location-dot mr-2"></i>Dirección Consultorio
                        </th>
                        <th scope="col" class="px-6 py-4 invisible lg:visible">
                            <i class="fa-solid fa-globe mr-2"></i>Localidad
                        </th>
                        <th scope="col" class="px-6 py-4 invisible lg:visible">
                            <i class="fa-solid fa-tag fa-flip-horizontal mr-2"></i>Especialidad
                        </th>
                        <th scope="col" class="px-6 py-4 invisible lg:visible">
                            <i class="fa-solid fa-phone mr-2"></i>Contacto
                        </th>
                    </tr>
                </thead>
                <tbody class="mt-8 ">
                    @foreach ($people as $person)
                        <tr class="bg-white border-b dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600 ">
                            <td class="px-6 py-4 uppercase">
                                <p class="font-bold">{{ $person->nombre }}</p>
                                <p class="lowercase text-md">{{ $person->email }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase invisible lg:visible">
                                <p>{{ $person->domicilio }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase invisible lg:visible">
                                <p>{{ $person->localidad }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase invisible lg:visible">
                                <p>{{ $person->especialidad }}</p>
                            </td>
                        
                            <td class="px-6 py-4 uppercase invisible lg:visible">
                                <p>{{ $person->telefono }}</p>
                            </td>
                            <td class="px-6 py-4 hidden">
                                <p>{{ $person->at }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script>
        const searchInput = document.getElementById('table-search-users');
        const rows = document.querySelectorAll('tbody tr');
        const checkbox = document.getElementById('default-checkbox');
        checkbox.addEventListener('change', function() {
            const checked = checkbox.checked;
            rows.forEach(function(row) {
                const atencionDomiciliaria = row.querySelector('td:nth-child(6) p').textContent;
                if (checked && atencionDomiciliaria !== '1') {
                    row.style.display = 'none';
                } else {
                    row.style.display = 'table-row';
                }
            });
        });
        searchInput.addEventListener('input', function(event) {
            const searchValue = event.target.value.toLowerCase();
            rows.forEach(function(row) {
                const name = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const specialty = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const location = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                if (name.includes(searchValue) || specialty.includes(searchValue) || location.includes(
                        searchValue)) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
  @include('include.cta')
  @include('include.footer')
@endsection
