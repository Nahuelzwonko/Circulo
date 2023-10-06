<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $cantidadUsuarios = User::count();
        return view('admin.dashboard', ['cantidadUsuarios' => $cantidadUsuarios]);
    }

}