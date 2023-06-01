<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioEnviado;
use Illuminate\Support\Facades\Storage;



class AsociateController extends Controller
{
    public function index()
    {
        return view('asociate.index');
    }

    public function sendForm(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('cv')) {
            $archivoPDF = $request->file('cv');
            $rutaArchivoPDF = $archivoPDF->store('temp', 'public');
        } else {
            $rutaArchivoPDF = null;
        }
        if ($request->hasFile('dni')) {
            $archivoImagen = $request->file('dni');
            $rutaArchivoImagen = $archivoImagen->store('temp', 'public');
        } else {
            $rutaArchivoImagen = null;
        }
        if ($request->hasFile('titulo')) {
            $archivoTitulo = $request->file('titulo');
            $rutaTitulo = $archivoTitulo->store('temp', 'public');
        } else {
            $rutaTitulo = null;
        }
        if ($request->hasFile('posgrado')) {
            $archivoPosgrado = $request->file('posgrado');
            $rutaPosgrado = $archivoPosgrado->store('temp', 'public');
        } else {
            $rutaPosgrado = null;
        }
        if ($request->hasFile('matricula')) {
            $archivoMatricula = $request->file('matricula');
            $rutaMatricula = $archivoMatricula->store('temp', 'public');
        } else {
            $rutaMatricula =
                null;
        }
        if ($request->hasFile('ingresos')) {
            $archivoIngresos = $request->file('ingresos');
            $rutaIngresos = $archivoIngresos->store('temp', 'public');
        } else {
            $rutaIngresos =
                null;
        }
        if ($request->hasFile('cuit')) {
            $archivoCuit = $request->file('cuit');
            $rutaCuit = $archivoCuit->store('temp', 'public');
        } else {
            $rutaCuit =
                null;
        }
        if ($request->hasFile('salud')) {
            $archivoSalud = $request->file('salud');
            $rutaSalud = $archivoSalud->store('temp', 'public');
        } else {
            $rutaSalud =
                null;
        }
        if ($request->hasFile('poliza')) {
            $archivoPoliza = $request->file('poliza');
            $rutaPoliza = $archivoPoliza->store('temp', 'public');
        } else {
            $rutaPoliza =
                null;
        }
        if ($request->hasFile('consultorio')) {
            $archivoConsultorio = $request->file('consultorio');
            $rutaConsultorio = $archivoConsultorio->store('temp', 'public');
        } else {
            $rutaConsultorio =
                null;
        }
        Mail::to('codehuitweb@gmail.com')->send(new FormularioEnviado($data, $rutaArchivoPDF, $rutaArchivoImagen, $rutaTitulo, $rutaPosgrado, $rutaMatricula, $rutaIngresos, $rutaCuit, $rutaSalud, $rutaPoliza, $rutaConsultorio));

        if ($rutaArchivoPDF) {
            Storage::disk('public')->delete($rutaArchivoPDF);
        }
        if ($rutaArchivoImagen) {
            Storage::disk('public')->delete($rutaArchivoImagen);
        }
        if ($rutaTitulo) {
            Storage::disk('public')->delete($archivoTitulo);
        }
        if ($rutaPosgrado) {
            Storage::disk('public')->delete($archivoPosgrado);
        }
        if ($rutaMatricula) {
            Storage::disk('public')->delete($archivoMatricula);
        }
        if ($rutaIngresos) {
            Storage::disk('public')->delete($archivoIngresos);
        }
        if ($rutaCuit) {
            Storage::disk('public')->delete($archivoCuit);
        }
        if ($rutaSalud) {
            Storage::disk('public')->delete($archivoSalud);
        }
        if ($rutaPoliza) {
            Storage::disk('public')->delete($archivoPoliza);
        }
        if ($rutaConsultorio) {
            Storage::disk('public')->delete($archivoConsultorio);
        }

        return redirect()->route('asociate.success');
    }
}