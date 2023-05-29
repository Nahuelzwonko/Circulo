<?php

use App\Http\Controllers\AsociateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuienesController;
use App\Http\Controllers\KineclubController;
use App\Http\Controllers\ObrasController;
use App\Http\Controllers\ProfesionalesController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DatosController;
use App\Models\Post;

// Rutas públicas
Route::get('/', HomeContoller::class);
Route::get('kineClub', [KineclubController::class, 'index'])->name('kine.index');
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::get('quienes', [QuienesController::class, 'index'])->name('quienes.index');
Route::get('obras', [ObrasController::class, 'index'])->name('obras.index');
Route::get('asociate', [AsociateController::class, 'index'])->name('asociate.index');
Route::get('profesionales', [ProfesionalesController::class, 'index'])->name('profesionales.index');
Route::get('/allPost', function () {
    return view('allPost', [
        'posts' => Post::where('active', true)->get()
    ]);
})->name('allPost');

// Rutas privadas para usuarios
Route::middleware(['auth', 'verified'])->group(function () {
    //Editar perfil de administrador
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //inicio de administracion
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    //Agregar y quitar empresas
    Route::get('/datos', [DatosController::class, 'index'])->name('datos.index');
    Route::post('/datos', [DatosController::class, 'store'])->name('datos.store');
    Route::get('/datos/{dato}/edit', [DatosController::class, 'edit'])->name('datos.edit');
    Route::delete('/datos/{dato}', [DatosController::class, 'destroy'])->name('datos.destroy');
    Route::put('/datos/{dato}', [DatosController::class, 'update'])->name('datos.update');

    //seccion de noticias
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}', [PostController::class, 'view'])->name('posts.view');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    //Agregar quitar y editar datos de personal kinesiologo
    Route::get('/people', [PublicController::class, 'index'])->name('people.index');
    Route::get('/people/create', [PublicController::class, 'create'])->name('people.create');
    Route::post('/people', [PublicController::class, 'store'])->name('people.store');
    Route::get('/table/{id}', [PublicController::class, 'show'])->name('people.show');
    Route::delete('/people/{id}', [PublicController::class, 'destroy'])->name('people.destroy');
    Route::get('/people/{id}/edit', [PublicController::class, 'edit'])->name('people.edit');
    Route::put('/people/{id}', [PublicController::class, 'update'])->name('people.update');
});


require __DIR__ . '/auth.php';