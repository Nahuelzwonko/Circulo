<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class EventoController extends Controller
{
    public function index()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener los eventos del usuario actual
        $eventos = Evento::where('user_id', $user->id)->get();

        return view('fullcalendar', compact('eventos'));
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'title' => 'required',
                'descripcion' => 'required',
                'start' => 'required',
                'end' => 'required',
            ]);

            $user = Auth::user(); // Obtener el usuario autenticado

            $evento = new Evento;
            $evento->title = $data['title'];
            $evento->descripcion = $data['descripcion'];
            $evento->start = $data['start'];
            $evento->end = $data['end'];

            // Asignar el usuario actual como propietario del evento
            $evento->user_id = auth()->id();

            $evento->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function show()
    {
        // Obtén el usuario autenticado
        $user = Auth::user();

        // Obtén los eventos solo del usuario autenticado
        $eventos = Evento::where('user_id', $user->id)->get();

        return response()->json($eventos);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            // Buscar el evento por su ID
            $evento = Evento::find($id);

            if (!$evento) {
                return response()->json(['success' => false, 'error' => 'Evento no encontrado']);
            }

            return response()->json([
                'success' => true,
                'id' => $evento->id,
                'title' => $evento->title,
                'descripcion' => $evento->descripcion,
                'start' => $evento->start,
                'end' => $evento->end,
            ]);
        } catch (\Exception $e) {
            // Manejo de errores (puedes devolver un mensaje de error en JSON si es necesario)
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'title' => 'required',
                'descripcion' => 'required',
                'start' => 'required',
                'end' => 'required',
            ]);

            $evento = Evento::find($id);

            if (!$evento) {
                return response()->json(['success' => false, 'error' => 'Evento no encontrado']);
            }

            $evento->title = $data['title'];
            $evento->descripcion = $data['descripcion'];
            $evento->start = $data['start'];
            $evento->end = $data['end'];
            $evento->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $evento = Evento::find($id);

            if (!$evento) {
                return response()->json(['success' => false, 'error' => 'Evento no encontrado']);
            }

            $evento->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}