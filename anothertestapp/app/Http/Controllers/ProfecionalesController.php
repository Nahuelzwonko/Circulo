<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class ProfecionalesController extends Controller
{
    //
            public function index()
    {
        $people = Person::all();
        return view('profecionales.index', ['people' => $people]);;
    }
}