<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class allPostController extends Controller
{
    public function index(){
        return view('allPost');
    }
}
