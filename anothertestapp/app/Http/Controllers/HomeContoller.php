<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function __invoke()
    {
        $showAdvertisementModal = true; // Cambia esto según tus criterios para mostrar el modal

        return view('home')->with('showAdvertisementModal', $showAdvertisementModal);
    }

}