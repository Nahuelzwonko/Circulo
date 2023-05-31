<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioEnviado;


class AsociateController extends Controller
{
    public function index()
    {
        return view('asociate.index');
    }

    public function sendForm(Request $request)
    {
        // Validación de formularios si es necesario

        $data = $request->all();

        // Envía el correo electrónico utilizando las credenciales y el objeto Mailable
        Mail::to('codehuitweb@gmail.com')->send(new FormularioEnviado($data));

        // Redirecciona a una página de éxito o muestra un mensaje de éxito
        return redirect()->route('asociate.success');
    }
}