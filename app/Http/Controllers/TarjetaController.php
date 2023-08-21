<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarjetaController extends Controller
{
    public function Tarjeta(){
        $user = Auth::user();
        return view('tarjeta', compact('user'));
    }
    public function activateCard(Request $request)
    {
        $user = Auth::guard('web')->user();

        $data = $request->validate([
            'name' => 'required|string',
            'number' => 'required|string|unique:users,dni',
        ]);

        if ($user) {
            $user->nameTarjet = $data['name']; // Asignar el nombre al campo nameTarjet
            $user->dni = $data['number']; // Asignar el DNI al campo dni
            
            $user->save();
            $request->session()->flash('tarjeta_activada', true);
        }

        return redirect()->route('tarjeta'); // Ajusta la ruta según tu proyecto
    }
}