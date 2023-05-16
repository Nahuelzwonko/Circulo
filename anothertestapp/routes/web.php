<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\KineclubController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuienesController;
use App\Http\Controllers\ImagenController;


//Controlador de inicio
Route::get('/', HomeContoller::class);
//Controlller Register
Route::get('/register', [RegisterController::class, 'show']);

Route::get('/register', [RegisterController::class, 'register']);

//Controller Login
 Route::get ('login', [LoginController::class, 'index']); 
//Contoller paginas secuendarias
Route::get('quienes', [QuienesController::class, 'index']);
Route::get('kineClub', [KineclubController::class, 'index']);
// Route::get('quienes', [QuienesController::class, 'index']);
//Controller de contacto
Route::get('contacto', [ContactoController::class, 'index']);
