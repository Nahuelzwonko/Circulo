<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

//Controlador de inicio
Route::get('/', HomeContoller::class);
//Controlller Register
Route::get ('register', [RegisterController::class, 'index']); 
//Controller Login
Route::get ('login', [LoginController::class, 'index']); 