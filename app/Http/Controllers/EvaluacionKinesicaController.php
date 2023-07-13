<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionKinesica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluacionKinesicaController extends Controller
{
    public function store(Request $request)
    {
        // Obtener los datos del formulario
        $data = $request->all();

        // Obtener el usuario actual autenticado
        $user = auth()->user();

        // Crear una nueva instancia de EvaluacionKinesica y asignar los datos
        $evaluacion = new EvaluacionKinesica();
        $evaluacion->user_id = $user->id;
        $evaluacion->nombre = $data['nombre'];
        $evaluacion->edad = $data['edad'];
        $evaluacion->genero = $data['genero'];
        $evaluacion->direccion = $data['direccion'];
        $evaluacion->telefono = $data['telefono'];
        $evaluacion->contacto = $data['contacto'];
        $evaluacion->motivo = $data['motivo'];
        $evaluacion->historia = $data['historia'];
        $evaluacion->evaluacion = $data['evaluacion'];
        $evaluacion->examen = $data['examen'];
        $evaluacion->diagnostico = $data['diagnostico'];
        $evaluacion->objetivos = $data['objetivos'];
        $evaluacion->plan = $data['plan'];
        $evaluacion->seguimiento = $data['seguimiento'];
        $evaluacion->conclusiones = $data['conclusiones'];

        // Guardar la evaluación kinesica en la base de datos
        $evaluacion->save();

        // Redirigir a la página de éxito o realizar alguna otra acción
        return redirect()->route('evaluacion-kinesica.lista')->with('success', 'Evaluación kinesica guardada exitosamente.');
    }
    public function lista()
    {
        $user = auth()->user();
        $evaluaciones = EvaluacionKinesica::where('user_id', $user->id)->get();// Obtener todas las evaluaciones kinesicas

        return view('lista_evaluaciones', compact('evaluaciones'));
    }
    public function edit($id)
    {
        $evaluacion = EvaluacionKinesica::findOrFail($id); // Buscar la evaluación kinesica por ID

        return view('editar_evaluacion', compact('evaluacion'));
    }
    public function update(Request $request, $id)
    {
        $evaluacion = EvaluacionKinesica::findOrFail($id); // Buscar la evaluación kinesica por ID

        // Asignar los nuevos valores a los atributos de la evaluación kinesica
        $evaluacion->user_id = auth()->user()->id;
        $evaluacion->nombre = $request->input('nombre');
        $evaluacion->edad = $request->input('edad');
        $evaluacion->genero = $request->input('genero');
        $evaluacion->direccion = $request->input('direccion');
        $evaluacion->telefono = $request->input('telefono');
        $evaluacion->contacto = $request->input('contacto');
        $evaluacion->motivo = $request->input('motivo');
        $evaluacion->historia = $request->input('historia');
        $evaluacion->evaluacion = $request->input('evaluacion');
        $evaluacion->examen = $request->input('examen');
        $evaluacion->diagnostico = $request->input('diagnostico');
        $evaluacion->objetivos = $request->input('objetivos');
        $evaluacion->plan = $request->input('plan');
        $evaluacion->seguimiento = $request->input('seguimiento');
        $evaluacion->conclusiones = $request->input('conclusiones');

        // Guardar los cambios en la base de datos
        $evaluacion->save();

        return redirect()->route('evaluacion-kinesica.lista')->with('success', 'Evaluación kinesica actualizada exitosamente.');
    }


}