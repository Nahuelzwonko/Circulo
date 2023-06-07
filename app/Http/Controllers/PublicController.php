<?php

namespace App\Http\Controllers;

use App\Models\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function index()
    {
        $people = Person::all();
        $localidades = ['Capital', 'Guaymallén', 'Las Heras', 'Lavalle', 'Junín', ' La Paz', 'Maipu', 'Rivadavia', 'Santa Rosa', 'San Martin', 'Godoy Cruz', 'Luján de Cuyo', 'San Carlos', 'Tunuyán', 'Tupungato', 'General Alvear', 'Malargüe', 'San Rafael'];
        $accion = [true, false];


        return view('people.index', compact('people', 'localidades', 'accion'));

    }
    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $person = new Person();
        $person->nombre = $request->input('nombre');
        $person->domicilio = $request->input('domicilio');
        $person->email = $request->input('email');
        $person->at = $request->filled('accion') ? $request->input('accion') : false;
        $person->localidad = $request->input('localidad');
        $person->telefono = $request->input('telefono');
        $person->especialidad = $request->input('especialidad');
        $person->save();

        return redirect()->route('people.index')->with('success', 'Persona agregada exitosamente.');
    }


    public function show($id)
    {
        $person = Person::find($id);
        return view('people.show', compact('person'));
    }
    public function edit($id)
    {
        $person = Person::find($id);

        if (!$person) {
            return redirect()->route('people.index')->with('error', 'No se encontró la persona.');
        }

        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);

        if (!$person) {
            return redirect()->route('people.index')->with('error', 'No se encontró la persona.');
        }

        $person->nombre = $request->input('nombre');
        $person->domicilio = $request->input('domicilio');
        $person->email = $request->input('email');
        $person->at = $request->has('at');
        $person->localidad = $request->input('localidad');
        $person->telefono = $request->input('telefono');
        $person->especialidad = $request->input('especialidad');
        $person->save();

        return redirect()->route('people.index')->with('success', 'Persona actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $person = Person::find($id);

        if (!$person) {
            return redirect()->route('people.index')->with('error', 'No se encontró la persona.');
        }

        $person->delete();

        return redirect()->route('people.index')->with('success', 'Persona eliminada exitosamente.');
    }
}