<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function __invoke()
    {
        $showAdvertisementModal = true;
        $advertisementMessage = "¡Descuento especial por tiempo limitado!";

        return view('index', compact('showAdvertisementModal', 'advertisementMessage'));
    }
    
}