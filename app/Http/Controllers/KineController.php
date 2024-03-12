<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kine;
use Illuminate\Support\Facades\Storage;

class KineController extends Controller
{
    public function index()
    {
        $kines = Kine::all();

        return view('kine.index', compact('kines'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'descripcion' => 'nullable',

        ]);

        $kine = new Kine;

        $kine->nombre = $request->nombre;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $path = $request->file('foto')->store('public/fotos');
            $nuevo_path = str_replace('public/', '', $path);
            $kine->foto = $nuevo_path;
        }

        $kine->descripcion = $request->descripcion;
        if ($request->has('facebook_url')) {
            $kine->facebook_url = $request->facebook_url;
        }
        if ($request->has('instagram_url')) {
            $kine->instagram_url = $request->instagram_url;
        }
        if ($request->has('twitter_url')) {
            $kine->twitter_url = $request->twitter_url;
        }

        $kine->save();

        return redirect()->back()->with('success', 'Kine guardada exitosamente');
    }
    public function destroy(Kine $kine)
    {
        $kine->delete();

        return redirect()->route('kine.index')->with('success', 'La empresa ha sido eliminada exitosamente.');
    }
    public function edit(Kine $kine)
    {
        return view('kine.edit', compact('kine'));
    }

    public function update(Request $request, Kine $kine)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
        ]);
    
        $kine->nombre = $request->nombre;
        $kine->descripcion = $request->descripcion;
        $kine->facebook_url = $request->facebook_url;
        $kine->instagram_url = $request->instagram_url;
        $kine->twitter_url = $request->twitter_url;
    
        $kine->save();
    
        return redirect()->route('kine.index')->with('success', 'La empresa ha sido actualizada exitosamente.');
    }
    
}
