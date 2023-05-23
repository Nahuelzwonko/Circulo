@extends('layout')
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">Editar persona</h1>
        <form action="{{ route('people.update', $person->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Aquí puedes mostrar los campos de edición para los datos de la persona -->
            <div class="mb-4">
                <label for="nombre" class="block mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $person->nombre }}"
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="domicilio" class="block mb-2">Domicilio:</label>
                <input type="text" name="domicilio" id="domicilio" value="{{ $person->domicilio }}"
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="telefono" class="block mb-2">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="{{ $person->telefono }}"
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="especialidad" class="block mb-2">Especialidad:</label>
                <input type="text" name="especialidad" id="especialidad" value="{{ $person->especialidad }}"
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Guardar
                cambios</button>
        </form>
    </div>
</div>
