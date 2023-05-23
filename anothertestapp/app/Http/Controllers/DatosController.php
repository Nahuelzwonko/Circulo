<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dato;

class DatosController extends Controller
{
    //
    public function index()
    {
        $datos = Dato::all();
        return view('datos.index', compact('datos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|max:2048', // Ajusta las validaciones según tus necesidades
            'descripcion' => 'nullable' 
        ]);

        $imagenPath = $request->file('imagen')->store('public/imagenes');
        $imagenUrl = Storage::url($imagenPath);
        
        $dato = new Dato();
        $dato->nombre = $data['nombre'];
        $dato->imagen = $imagenUrl;
        $dato->descripcion = $data['descripcion']; 
        $dato->save();

        return redirect()->route('datos.index');
    }
    public function destroy(Dato $dato)
    {
        $dato->delete();
        return redirect()->route('datos.index')->with('success', 'Dato eliminado correctamente');
    }

}