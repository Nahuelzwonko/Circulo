<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sorteo;
use App\Models\Participante;
use Illuminate\Support\Facades\Storage;

class SorteoController extends Controller
{
    public function index()
    {
        $sorteos = Sorteo::all();
        $sorteos = Sorteo::orderByDesc('created_at')->get();
        $sorteos->transform(function ($sorteo) {
            $sorteo->inicio = \Carbon\Carbon::parse($sorteo->inicio)->format('d/m/Y');
            $sorteo->fin = \Carbon\Carbon::parse($sorteo->fin)->format('d/m/Y');
            // Agregar la ruta completa de la imagen
            $sorteo->imagen = Storage::url($sorteo->imagen);
            return $sorteo;
        });
        return view('sorteo.index', compact('sorteos'));
    }
    //inscripciones
    public function mostrarFormularioInscripcion(Sorteo $sorteo)
    {
        return view('sorteo.inscribirse', compact('sorteo'));
    }


    public function inscribirse(Request $request, Sorteo $sorteo)
    {
        // Validar los datos del formulario de inscripción
        $request->validate([
            'nombre_sorteo' => 'required|string',
            'email' => 'required|email',
            'nombre_apellido' => 'required|string',
            'numero_matricula' => 'required|string',
            'telefono' => 'required|string',
            'dni' => 'required|string',
        ]);

        // Crear un nuevo participante
        $participante = new Participante([
            'nombre_sorteo' => $request->nombre_sorteo,
            'email' => $request->email,
            'nombre_apellido' => $request->nombre_apellido,
            'numero_matricula' => $request->numero_matricula,
            'telefono' => $request->telefono,
            'dni' => $request->dni,
        ]);

        // Asignar el ID del sorteo al participante
        $participante->sorteo_id = $sorteo->id;

        // Guardar el participante en la base de datos
        $participante->save();
        // Almacenar el mensaje de éxito en la sesión
        session()->flash('success', '¡Te has inscrito al sorteo con éxito!');
        // Redireccionar al usuario a la página de confirmación o cualquier otra página deseada
        return redirect()->route('sorteo.index');
    }
}
