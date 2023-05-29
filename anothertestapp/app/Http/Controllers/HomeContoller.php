<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function __invoke()
    {
        $showAdvertisementModal = true; 
        return view('home')->with('showAdvertisementModal', $showAdvertisementModal);
    }

}