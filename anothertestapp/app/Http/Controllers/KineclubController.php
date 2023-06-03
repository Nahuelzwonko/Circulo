<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kine;


class KineclubController extends Controller
{
    public function index(){
         $kines = Kine::all();
        return view('kineClub.index', compact('kines'));
    }
}