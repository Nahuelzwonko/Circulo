<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function Consultorio()
    {
       
        return view('consultorio');
    }

}