<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarjetaController extends Controller
{
    public function Tarjeta(){
        $username = auth()->user()->name; // Aquí asumimos que el nombre de usuario está disponible a través de la autenticación de Laravel
        return view('tarjeta', compact('username'));
    }
}