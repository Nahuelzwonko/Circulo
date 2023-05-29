<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class ProfesionalesController extends Controller
{
    //
            public function index()
    {
        $people = Person::all();
        return view('profesionales.index', ['people' => $people]);;
    }
}