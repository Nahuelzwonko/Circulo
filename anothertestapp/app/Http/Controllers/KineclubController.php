<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KineclubController extends Controller
{
    public function index(){
        return view('kineClub/index');
    }
}
