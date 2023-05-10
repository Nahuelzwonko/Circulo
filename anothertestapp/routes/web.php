<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuieresController;

//Controlador de inicio
Route::get('/', HomeContoller::class);
//Controlller Register
Route::get ('register', [RegisterController::class, 'index']); 
//Controller Login
 Route::get ('login', [LoginController::class, 'index']); 
//Contoller paginas secuendarias
Route::get('quienes', [QuieresController::class, 'index']);
//Controller de contacto
Route::get('contacto', [ContactoController::class, 'index']);