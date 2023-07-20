@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
<div class=" relative ">
    @include('users.include.nav')
</div>

@section('content')
    <section class="text-gray-600 body-font">
        <div class="w-full flex justify-center mt-5">
            <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">CKFM</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 uppercase">Listado de Historias Clinicas
                </h1>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nombre del Profesional</th>
                            <th scope="col" class="px-6 py-3">Nombre del Paciente</th>
                            <th scope="col" class="px-6 py-3">Editar</th>
                            <th scope="col" class="px-6 py-3">Eliminar</th>
                            <th scope="col" class="px-6 py-3">Descargar</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($formularios as $formulario)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $formulario->nombre_profesional }}</td>
                                <td class="px-6 py-4">{{ $formulario->nombre_paciente }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center items-center">
                                        <a href="{{ route('formulario.edit', $formulario->id) }}"
                                            class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                                    </div>


                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center items-center">
                                        <form action="{{ route('formulario.destroy', $formulario->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('¿Estás seguro de que deseas eliminar este formulario?')"
                                                class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  ">Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex justify-center items-center">
                                        @foreach ($formularios as $formulario)
                                            <!-- Mostrar la información del formulario aquí -->
                                            <a href="{{ route('formulario.pdf', $formulario->id) }}"
                                                class=" text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Descargar
                                                PDF</a>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">¿Que puedo hacer en
                    esta lista?</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">En esta enumeración, te presentamos los
                    privilegios habilitados para los usuarios con rol de administrador, brindándote un mayor control y
                    funcionalidad en el sistema:</p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <div class="flex flex-col justify-center w-full text-center items-center">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex justify-center p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Editar</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex justify-center p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Eliminar</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex justify-center p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">Descargar</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
