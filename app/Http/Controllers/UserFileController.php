<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserFile;
use Illuminate\Support\Facades\Auth;

class UserFileController extends Controller
{
    public function createForm()
    {
        return view('user_files.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_apellido' => 'required',
            'cv_pdf' => 'nullable|mimes:pdf',
            'dni_image' => 'nullable|mimes:jpeg,png,jpg',
            'titulo_universitario_pdf' => 'nullable|mimes:pdf',
            'titulo_posgrado_pdf' => 'nullable|mimes:pdf',
            'matricula_provincial_pdf' => 'nullable|mimes:pdf',
            'constancia_ingresos_brutos_pdf' => 'nullable|mimes:pdf',
            'constancia_cuit_pdf' => 'nullable|mimes:pdf',
            'certificado_inscripcion_superintendencia_salud_pdf' => 'nullable|mimes:pdf',
            'poliza_seguro_mala_praxis_pdf' => 'nullable|mimes:pdf',
            'habilitacion_consultorio_pdf' => 'nullable|mimes:pdf',
        ]);
        if ($request->hasFile('cv_pdf')) {
            $cvPdfPath = $request->file('cv_pdf')->store('user_files', 'public');
            $validatedData['cv_pdf'] = $cvPdfPath;
        }
        if ($request->hasFile('dni_image')) {
            $dniImagePath = $request->file('dni_image')->store('user_files', 'public');
            $validatedData['dni_image'] = $dniImagePath;
        }
        if ($request->hasFile('titulo_universitario_pdf')) {
            $tituloUniversitarioPdfPath = $request->file('titulo_universitario_pdf')->store('user_files', 'public');
            $validatedData['titulo_universitario_pdf'] = $tituloUniversitarioPdfPath;
        }
        if ($request->hasFile('titulo_posgrado_pdf')) {
            $tituloPosgradoPdfPath = $request->file('titulo_posgrado_pdf')->store('user_files', 'public');
            $validatedData['titulo_posgrado_pdf'] = $tituloPosgradoPdfPath;
        }
        if ($request->hasFile('matricula_provincial_pdf')) {
            $tituloPosgradoPdfPath = $request->file('matricula_provincial_pdf')->store('user_files', 'public');
            $validatedData['matricula_provincial_pdf'] = $tituloPosgradoPdfPath;
        }
        if ($request->hasFile('constancia_ingresos_brutos_pdf')) {
            $tituloPosgradoPdfPath = $request->file('constancia_ingresos_brutos_pdf')->store('user_files', 'public');
            $validatedData['constancia_ingresos_brutos_pdf'] = $tituloPosgradoPdfPath;
        }
        if ($request->hasFile('constancia_cuit_pdf')) {
            $tituloPosgradoPdfPath = $request->file('constancia_cuit_pdf')->store('user_files', 'public');
            $validatedData['constancia_cuit_pdf'] = $tituloPosgradoPdfPath;
        }
        if ($request->hasFile('certificado_inscripcion_superintendencia_salud_pdf')) {
            $tituloPosgradoPdfPath = $request->file('certificado_inscripcion_superintendencia_salud_pdf')->store('user_files', 'public');
            $validatedData['certificado_inscripcion_superintendencia_salud_pdf'] = $tituloPosgradoPdfPath;
        }
        if ($request->hasFile('poliza_seguro_mala_praxis_pdf')) {
            $tituloPosgradoPdfPath = $request->file('poliza_seguro_mala_praxis_pdf')->store('user_files', 'public');
            $validatedData['poliza_seguro_mala_praxis_pdf'] = $tituloPosgradoPdfPath;
        }
        if ($request->hasFile('habilitacion_consultorio_pdf')) {
            $tituloPosgradoPdfPath = $request->file('habilitacion_consultorio_pdf')->store('user_files', 'public');
            $validatedData['habilitacion_consultorio_pdf'] = $tituloPosgradoPdfPath;
        }


        $validatedData['user_id'] = Auth::id();

        UserFile::create($validatedData);

        return redirect()->route('user-files.show', ['id' => Auth::id()])->with('success', 'Archivos cargados exitosamente.');
    }

    public function show()
    {
        $userId = Auth::id();
        $userFiles = UserFile::where('user_id', $userId)->first();
        return view('user_files.show', compact('userFiles'));
    }
    public function editForm()
    {
        $userId = Auth::id();
        $userFiles = UserFile::where('user_id', $userId)->first();
        return view('user_files.edit', compact('userFiles'));
    }
    public function update(Request $request)
    {
        $userId = Auth::id();
        $userFiles = UserFile::where('user_id', $userId)->first();
        $validatedData = $request->validate([
            'cv_pdf' => 'nullable|mimes:pdf',
            'dni_image' => 'nullable|mimes:jpeg,png,jpg',
            'titulo_universitario_pdf' => 'nullable|mimes:pdf',
            'titulo_posgrado_pdf' => 'nullable|mimes:pdf',
            'matricula_provincial_pdf' => 'nullable|mimes:pdf',
            'constancia_ingresos_brutos_pdf' => 'nullable|mimes:pdf',
            'constancia_cuit_pdf' => 'nullable|mimes:pdf',
            'certificado_inscripcion_superintendencia_salud_pdf' => 'nullable|mimes:pdf',
            'poliza_seguro_mala_praxis_pdf' => 'nullable|mimes:pdf',
            'habilitacion_consultorio_pdf' => 'nullable|mimes:pdf',
        ]);
        if ($request->hasFile('cv_pdf')) {
            $cvPdfPath = $request->file('cv_pdf')->store('user_files', 'public');
            $validatedData['cv_pdf'] = $cvPdfPath;
        }

        if ($request->hasFile('dni_image')) {
            $dniImagePath = $request->file('dni_image')->store('user_files', 'public');
            $validatedData['dni_image'] = $dniImagePath;
        }

        if ($request->hasFile('titulo_universitario_pdf')) {
            $tituloUniversitarioPdfPath = $request->file('titulo_universitario_pdf')->store('user_files', 'public');
            $validatedData['titulo_universitario_pdf'] = $tituloUniversitarioPdfPath;
        }

        if ($request->hasFile('titulo_posgrado_pdf')) {
            $tituloPosgradoPdfPath = $request->file('titulo_posgrado_pdf')->store('user_files', 'public');
            $validatedData['titulo_posgrado_pdf'] = $tituloPosgradoPdfPath;
        }

        if ($request->hasFile('matricula_provincial_pdf')) {
            $matriculaProvincialPdfPath = $request->file('matricula_provincial_pdf')->store('user_files', 'public');
            $validatedData['matricula_provincial_pdf'] = $matriculaProvincialPdfPath;
        }

        if ($request->hasFile('constancia_ingresos_brutos_pdf')) {
            $constanciaIngresosBrutosPdfPath = $request->file('constancia_ingresos_brutos_pdf')->store('user_files', 'public');
            $validatedData['constancia_ingresos_brutos_pdf'] = $constanciaIngresosBrutosPdfPath;
        }

        if ($request->hasFile('constancia_cuit_pdf')) {
            $constanciaCuitPdfPath = $request->file('constancia_cuit_pdf')->store('user_files', 'public');
            $validatedData['constancia_cuit_pdf'] = $constanciaCuitPdfPath;
        }

        if ($request->hasFile('certificado_inscripcion_superintendencia_salud_pdf')) {
            $certificadoInscripcionSuperintendenciaSaludPdfPath = $request->file('certificado_inscripcion_superintendencia_salud_pdf')->store('user_files', 'public');
            $validatedData['certificado_inscripcion_superintendencia_salud_pdf'] = $certificadoInscripcionSuperintendenciaSaludPdfPath;
        }

        if ($request->hasFile('poliza_seguro_mala_praxis_pdf')) {
            $polizaSeguroMalaPraxisPdfPath = $request->file('poliza_seguro_mala_praxis_pdf')->store('user_files', 'public');
            $validatedData['poliza_seguro_mala_praxis_pdf'] = $polizaSeguroMalaPraxisPdfPath;
        }

        if ($request->hasFile('habilitacion_consultorio_pdf')) {
            $habilitacionConsultorioPdfPath = $request->file('habilitacion_consultorio_pdf')->store('user_files', 'public');
            $validatedData['habilitacion_consultorio_pdf'] = $habilitacionConsultorioPdfPath;
        }
        $userFiles->update($validatedData);
        return redirect()->route('user-files.show', ['id' => Auth::id()])->with('success', 'Archivos actualizados exitosamente.');
    }
}