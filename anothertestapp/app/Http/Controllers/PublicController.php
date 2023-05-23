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
        return view('people.index', ['people' => $people]);

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