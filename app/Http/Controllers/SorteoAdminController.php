<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sorteo;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\StreamedResponse;


class SorteoAdminController extends Controller
{
    public function index()
    {
        $sorteos = Sorteo::all();
        $sorteos = Sorteo::withCount('participantes')->get();
        $sorteos->transform(function ($sorteo) {
            $sorteo->inicio = \Carbon\Carbon::parse($sorteo->inicio)->format('Y-m-d');
            $sorteo->fin = \Carbon\Carbon::parse($sorteo->fin)->format('Y-m-d');
            

            return $sorteo;
        });


        return view('admin.sorteos.index', compact('sorteos'));
    }
    public function create()
    {
        // Aquí mostrarías el formulario para crear un nuevo sorteo
        return view('admin.sorteos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'imagen' => 'required|image', // Asegura que la imagen sea un archivo de imagen
            'inicio' => 'required|date',
            'fin' => 'required|date|after:inicio',
            'datos' => 'required|string',
        ]);

        // Manejar la carga de archivos
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/sorteos');
            // Almacena solo la ruta relativa de la imagen
            $imagenUrl = Storage::url($imagenPath);
            
            
            
        }

        // Crear un nuevo objeto Sorteo con los datos del formulario
        $sorteo = new Sorteo();
        $sorteo->nombre = $request->nombre;
        $sorteo->imagen = $imagenPath ?? null;
        $sorteo->inicio = $request->inicio;
        $sorteo->fin = $request->fin;
        $sorteo->datos = $request->datos;
        // Guardar el objeto Sorteo en la base de datos
        $sorteo->save();

        // Redireccionar a una ruta después de guardar los datos (por ejemplo, a una vista de éxito)
        return redirect()->route('admin.sorteos.index')->with('success', '¡Sorteo creado exitosamente!');
    }
    public function edit(Sorteo $sorteo)
    {
        return view('admin.sorteos.edit', compact('sorteo'));
    }
    public function update(Request $request, Sorteo $sorteo)
    {
        // Validar los datos del formulario de edición
        $request->validate([
            'nombre' => 'nullable|string',
            'imagen' => 'nullable|image', // Permitir que la imagen sea opcional
            'inicio' => 'nullable|date',
            'fin' => 'nullable|date|after:inicio',
            'datos' => 'nullable|string',
        ]);

        // Actualizar los datos del sorteo solo si se proporcionan
        if ($request->filled('nombre')) {
            $sorteo->nombre = $request->nombre;
        }
        if ($request->filled('inicio')) {
            $sorteo->inicio = $request->inicio;
        }
        if ($request->filled('fin')) {
            $sorteo->fin = $request->fin;
        }
        if ($request->filled('datos')) {
            $sorteo->datos = $request->datos;
        }

        // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('imagen')) {
            // Guardar la nueva imagen y actualizar la URL
            $imagenPath = $request->file('imagen')->store('imagenes');
            $sorteo->imagen = url(Storage::url($imagenPath));
        }

        // Guardar los cambios en la base de datos
        $sorteo->save();

        // Redireccionar a una ruta después de la actualización
        return redirect()->route('admin.sorteos.index')->with('success', '¡Sorteo actualizado con éxito!');
    }
    public function destroy(Sorteo $sorteo)
    {
        $sorteo->delete();
        return redirect()->route('admin.sorteos.index')->with('success', '¡Sorteo eliminado con éxito!');
    }
    public function descargar($sorteoId)
    {
        $sorteo = Sorteo::findOrFail($sorteoId);
        $participantes = $sorteo->participantes;

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=participantes_sorteo_' . $sorteo->id . '.csv',
        ];

        $callback = function () use ($participantes) {
            $file = fopen('php://output', 'w');

            // Escribir encabezados CSV
            fputcsv($file, ['Nombre del Sorteo', 'Correo Electrónico', 'Nombre y Apellido', 'Número de Matrícula', 'Teléfono', 'DNI']);

            // Escribir datos de participantes
            foreach ($participantes as $participante) {
                fputcsv($file, [
                    $participante->nombre_sorteo,
                    $participante->email,
                    $participante->nombre_apellido,
                    $participante->numero_matricula,
                    $participante->telefono,
                    $participante->dni,
                ]);
            }

            fclose($file);
        };

        return new StreamedResponse($callback, 200, $headers);
    }
    public function cambiarEstado(Sorteo $sorteo)
    {
        $sorteo->estado = $sorteo->estado === 'activo' ? 'finalizado' : 'activo';
        $sorteo->save();

        return redirect()->back()->with('success', '¡Estado del sorteo cambiado correctamente!');
    }
}
