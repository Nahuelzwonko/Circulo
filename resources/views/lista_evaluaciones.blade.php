@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
@include('users.include.nav')

@section('content')
    <!-- lista_evaluaciones.blade.php -->
    <section class="text-gray-600 body-font">
        <div class="w-full flex justify-center mt-5">
            <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Listado de Evaluaciones Kinesicas
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Aca vas a encontrar todas las fichas que hayas
                    realizado de todos tus pacientes. </p>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-3 py-3">
                                Numero de consulta
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Nombre de paciente
                            </th>

                            <th scope="col" class="px-3 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($evaluaciones as $evaluacion)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $evaluacion->id }}
                                </th>
                                <td class="px-3 py-3">
                                    {{ $evaluacion->nombre }}
                                </td>
                                <div class="">
                                    <td class="px-3 py-3">
                                        <div class="flex items-center">
                                            

                                            <a href="{{ route('evaluacion-kinesica.edit', $evaluacion->id) }}"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                        </div>
                                        <div class="flex items-center">
                                            <a href="{{ route('evaluacion-kinesica.descargar', $evaluacion->id) }}"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Descargar</a>
                                        </div>
                                    </td>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <h2></h2>

@include('users.include.footer')
@endsection
