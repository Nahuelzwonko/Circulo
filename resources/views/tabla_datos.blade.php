@extends('users.layouts.template')
@section('title', 'Bienvenido | Inicio')
<div class=" relative ">
    @include('users.include.nav')
</div>

@section('content')
    <section class="text-gray-600 body-font relative">

        <div class="container px-5 py-24 mx-auto">

            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Formulario agregado <span class="text-green-400 dark:text-green-400">Correctamente</span></h1>
            <div class="w-full flex justify-center items-center mt-10">
                
                <table class="w-[80%] text-sm text-center text-gray-500 border-black ">
                    <thead class="text-xs text-black uppercase bg-gray-50 dark:bg-black border border-gray-500 ">
                        <tr>
                            <th class="px-6 py-3">Nombre del Profesional</th>
                            <th class="px-6 py-3">Nombre del Paciente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border border-gray-500">
                            <td class="px-6 py-4">{{ $evaluacion->nombre_profesional }}</td>
                            <td class="px-6 py-4">{{ $evaluacion->nombre_paciente }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <section class="text-gray-600 body-font relative z-0">
        <div class="relative overflow-x-auto">

        </div>
    </section>
@endsection
