@extends('master')
@section('titulo', 'Profesionales asociados | CKFM')
@section('Encabezado', 'Listado de profesionales')

@section('cont',
    'Aquí encontraras a cada uno de los profesionales asociados. Te invitamos a utilizar los filtros para
    agilizar tu búsqueda.')
@section('Boton', 'Infórmate')
@section('content')
    <section class="h-full flex flex-col items-center mt-20">
        <h1 class="font-hammersmith text-7xl">Búsqueda</h1>
        <div class="w-[80%] relative overflow-x-auto  sm:rounded-lg">
            <div class="flex flex-col lg:flex-row-reverse justify-evenly items-center px-8 mt-8 lg:py-20">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-lg font-medium text-gray-900 dark:text-gray-300">Atención
                        Domiciliaria</label>
                </div>
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
                        <th scope="col" class="px-6 py-4 lg:w-auto sm:w-1/5">
                            <i class="fa-solid fa-sharp fa-location-dot mr-2"></i>Dirección Consultorio
                        </th>
                        <th scope="col" class="px-6 py-4 lg:w-auto sm:w-1/5">
                            <i class="fa-solid fa-globe mr-2"></i>Localidad
                        </th>
                        <th scope="col" class="px-6 py-4 lg:w-auto sm:w-1/5">
                            <i class="fa-solid fa-tag fa-flip-horizontal mr-2"></i>Especialidad
                        </th>
                        <th scope="col" class="px-6 py-4 lg:w-auto sm:w-1/5">
                            <i class="fa-solid fa-phone mr-2"></i>Contacto
                        </th>
                    </tr>
                </thead>
                <tbody class="mt-8">
                    @foreach ($people as $person)
                        <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 uppercase">
                                <p class="font-bold">{{ $person->nombre }}</p>
                                <p class="lowercase text-md invisible lg:visible">{{ $person->email }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase lg:w-auto sm:w-1/5">
                                <p>{{ $person->domicilio }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase lg:w-auto sm:w-1/5">
                                <p>{{ $person->localidad }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase lg:w-auto sm:w-1/5">
                                <p>{{ $person->especialidad }}</p>
                            </td>
                            <td class="px-6 py-4 uppercase lg:w-auto sm:w-1/5">
                                <p>{{ $person->telefono }}</p>
                            </td>
                            <td class="px-6 py-4 hidden">
                                <p>{{ $person->at }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="flex flex-col items-center">
                <!-- Help text -->
                <span class="text-sm text-gray-700 dark:text-gray-400">
                    Mostrando <span class="font-semibold text-gray-900 dark:text-white">1</span> a <span
                        class="font-semibold text-gray-900 dark:text-white">10</span> de <span
                        class="font-semibold text-gray-900 dark:text-white">100</span> Entradas
                </span>
                <div class="inline-flex mt-2 xs:mt-0">
                    <!-- Buttons -->
                    <button id="prev-button"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        disabled>
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Anterior
                    </button>
                    <button id="next-button"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Próximo
                        <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const prevButton = document.getElementById('prev-button');
            const nextButton = document.getElementById('next-button');

            let currentPage = 1;
            const entriesPerPage = 10;
            const totalEntries = <?php echo count($people); ?>;
            const totalPages = Math.ceil(totalEntries / entriesPerPage);

            updateButtons();

            function updateButtons() {
                if (currentPage === 1) {
                    prevButton.disabled = true;
                } else {
                    prevButton.disabled = false;
                }

                if (currentPage === totalPages) {
                    nextButton.disabled = true;
                } else {
                    nextButton.disabled = false;
                }
            }

            function showEntries() {
                const tableRows = document.querySelectorAll('tbody tr');
                const startIndex = (currentPage - 1) * entriesPerPage;
                const endIndex = startIndex + entriesPerPage;

                tableRows.forEach(function(row, index) {
                    if (index >= startIndex && index < endIndex) {
                        row.style.display = 'table-row';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            prevButton.addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    showEntries();
                    updateButtons();
                }
            });

            nextButton.addEventListener('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showEntries();
                    updateButtons();
                }
            });

            showEntries();
        });
    </script>
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
