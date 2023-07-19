<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionKinesica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;

class EvaluacionKinesicaController extends Controller
{
    public function create()
    {
        return view('ficha_kinesica');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'nombre_profesional' => 'required|string',
            'nombre_paciente' => 'required|string',
            'edad' => 'required|integer',
            'obra_social' => 'required|string',
            'telefono_particular' => 'required|string',
            'telefono_celular' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'dni' => 'required|string',
            'domicilio' => 'required|string',
            'localidad' => 'required|string',
            'profesional_derivante' => 'required|string',
            'mat' => 'required|string',
            'profesion_ocupacion' => 'required|string',
            'otros' => 'required|string',
            'antecedentes_familiares' => 'required|string',
            'diagnostico_ingreso' => 'required|string',
            'plan_tratamiento' => 'required|string',
            'objetivos_tratamiento' => 'required|string',
            'tension_arterial' => 'nullable|boolean',
            'diabetes' => 'nullable|boolean',
            'fumador' => 'nullable|boolean',
            'cardiaco' => 'nullable|boolean',
            'cirrosis' => 'nullable|boolean',
            'artrosis' => 'nullable|boolean',
            'artritis' => 'nullable|boolean',
            'reumatoidea' => 'nullable|boolean',
            'hemiplejias' => 'nullable|boolean',
            'asma' => 'nullable|boolean',
            'chagas' => 'nullable|boolean',
            'marcapsos' => 'nullable|boolean',
            'reemplazo_cadera_derecha' => 'nullable|boolean',
            'usa_protesis' => 'nullable|boolean',
            'reemplazo_cadera_izquierda' => 'nullable|boolean',
        ]);
        $antecedentes_familiares = [];
        foreach (['tension_arterial', 'diabetes', 'fumador', 'cardiaco', 'cirrosis', 'artrosis', 'artritis', 'reumatoidea', 'hemiplejias', 'asma', 'chagas', 'marcapsos', 'reemplazo_cadera_derecha', 'usa_protesis', 'reemplazo_cadera_izquierda'] as $campo) {
            $antecedentes_familiares[$campo] = $request->has($campo);
        }
        $data['antecedentes_familiares'] = json_encode($antecedentes_familiares);
        $data['user_id'] = Auth::id(); // Asignar el ID del usuario autenticado.

        EvaluacionKinesica::create($data);
        return redirect()->route('mostrar_formularios');
    }
    public function mostrarTablaDatos()
    {

        $user_id = auth()->user()->id;
        $formularios = EvaluacionKinesica::where('user_id', $user_id)->get();

        return view('mostrar_formularios', ['formularios' => $formularios]);
    }
    public function mostrarFormularios()
    {
        // Obtenemos el ID del usuario autenticado
        $user_id = Auth::id();

        // Obtenemos solo los formularios asociados al user_id del usuario autenticado
        $formularios = EvaluacionKinesica::where('user_id', $user_id)->get();

        return view('mostrar_formularios', ['formularios' => $formularios]);
    }
    public function edit($id)
    {
        $formulario = EvaluacionKinesica::findOrFail($id);
        return view('edit_formulario', compact('formulario'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $formulario = EvaluacionKinesica::findOrFail($id);

        $data = $request->validate([
            'nombre_profesional' => 'nullable',
            'nombre_paciente' => 'nullable',
            'edad' => 'nullable',
            'obra_social' => 'nullable',
            'telefono_particular' => 'nullable',
            'telefono_celular' => 'nullable',
            'fecha_nacimiento' => 'nullable',
            'dni' => 'nullable',
            'domicilio' => 'nullable',
            'localidad' => 'nullable',
            'profesional_derivante' => 'nullable',
            'mat' => 'nullable',
            'profesion_ocupacion' => 'nullable',
            'otros' => 'nullable',
            'antecedentes_familiares' => 'nullable',
            'plan_tratamiento' => 'nullable',
            'diagnostico_ingreso' => 'nullable',
            'objetivos_tratamiento' => 'nullable',
        ]);

        $formulario->update($data);

        return redirect()->route('mostrar_formularios');
    }
    public function destroy($id)
    {
        $formulario = EvaluacionKinesica::findOrFail($id);
        $formulario->delete();

        return redirect()->route('mostrar_formularios')->with('success', 'Formulario eliminado correctamente');
    }
    // public function generatePDF($id)
    // {
    //     $formulario = EvaluacionKinesica::findOrFail($id);
    //     $data = ['formulario' => $formulario];
    //     $pdf = PDF::loadView('pdf.ficha_kinesica', $data);
    //     return $pdf->download('formulario.pdf');
    // }
    public function generarPDF($id)
    {
        $formulario = EvaluacionKinesica::findOrFail($id);
        $dompdf = new Dompdf();
        $html = view('pdf.ficha_kinesica', compact('formulario'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        // Opcional: Puedes configurar el tamaño y la orientación del papel, por ejemplo:
        // $dompdf->setPaper('A4', 'portrait');

        return $dompdf->stream('formulario.pdf');
    }
}