<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sorteo;
use App\Models\Participante;

class SorteoController extends Controller
{
    public function index()
    {
        $sorteos = Sorteo::all();
        $sorteos->transform(function ($sorteo) {
            $sorteo->inicio = \Carbon\Carbon::parse($sorteo->inicio)->format('Y-m-d');
            $sorteo->fin = \Carbon\Carbon::parse($sorteo->fin)->format('Y-m-d');
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

    // Redireccionar al usuario a la página de confirmación o cualquier otra página deseada
    return redirect()->route('sorteo.index')->with('success', '¡Te has inscrito al sorteo con éxito!');
}

}
