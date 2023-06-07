<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarMensaje;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto/index');
    }
    public function enviarMensaje(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('contacto@kinesiologosmza.com')->send(new EnviarMensaje($data));
        // ...
        return redirect()->route('mensaje.enviado');

    }
    public function mensajeEnviado()
    {
        return view('contacto.mensaje_enviado');
    }
}