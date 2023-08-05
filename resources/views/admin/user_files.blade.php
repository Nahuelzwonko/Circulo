@extends('admin.layouts.template')
@section('title', 'Panel de control | Circulo')
@include('admin.include.nav')
@section('content')
<div class="w-full flex justify-center mt-5">
            <img src="{{ asset('storage/logo/logoblack.svg') }}" alt="">
        </div>
    <div class="w-full flex justify-center">
        <div class="xl:w-3/4 2xl:w-4/5 w-full">
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="sm:flex items-center justify-between">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">
                        Datos cargados</p>
                    <div class="mt-4 sm:mt-0">

                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-900 px-4 md:px-10 pb-5">
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <tbody>
                            @foreach ($userFiles as $userFile)
                                <tr tabindex="0"
                                    class="focus:outline-none text-sm leading-none text-gray-600 dark:text-gray-200   h-16">
                                    <td class="w-1/2">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gray-700 rounded-sm flex items-center justify-center">
                                                <p class="text-xs font-bold leading-3 text-white">
                                                </p>
                                            </div>
                                            <div class="pl-2">
                                                <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">
                                                    Usuario-{{ $userFile->user->name }}
                                                </p>
                                                <p class="text-xs leading-3 text-gray-600 dark:text-gray-200   mt-2">
                                                    {{ $userFile->nombre_apellido }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pl-16">
                                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('admin.user-files.show', ['id' => $userFile->user_id]) }}">Ver Archivos</a>
                                    </td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
@endsection
