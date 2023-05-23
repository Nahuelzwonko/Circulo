<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dato;
class ObrasController extends Controller
{
    //
    public function index()
    {
        $datos = Dato::all();
        return view('obras', compact('datos'));
    }
}