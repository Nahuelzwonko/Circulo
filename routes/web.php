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
use App\Http\Controllers\KineController;
use App\Models\Post;
// Rutas públicas
Route::get('/', HomeContoller::class);
Route::get('kineClub', [KineclubController::class, 'index'])->name('kineClub.index');
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/enviar-contacto', [ContactoController::class, 'enviarMensaje'])->name('enviar.contacto');
Route::get('/mensaje-enviado', [ContactoController::class, 'mensajeEnviado'])->name('mensaje.enviado');
Route::get('quienes', [QuienesController::class, 'index'])->name('quienes.index');
Route::get('obras', [ObrasController::class, 'index'])->name('obras.index');
Route::get('asociate', [AsociateController::class, 'index'])->name('asociate.index');
Route::get('profesionales', [ProfesionalesController::class, 'index'])->name('profesionales.index');
Route::get('/allPost', function () {
    return view('allPost', [
        'posts' => Post::where('active', true)->get()
    ]);
})->name('allPost');
Route::get('/asociate', [AsociateController::class, 'index'])->name('asociate.index');
Route::post('/asociate/send-form', [AsociateController::class, 'sendForm'])->name('asociate.send-form');
Route::get('/asociate/success', function () {
    return view('asociate.success');
})->name('asociate.success');
Route::get('/posts/{id}', [PostController::class, 'view'])->name('posts.view');
//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:user'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/user/home', function () {
        return view('user_home');
    })->name('user.home');
});

// Rutas privadas para administrador
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Editar perfil de administrador
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Agregar y quitar empresas
    Route::get('/datos', [DatosController::class, 'index'])->name('datos.index');
    Route::post('/datos', [DatosController::class, 'store'])->name('datos.store');
    Route::get('/datos/{dato}/edit', [DatosController::class, 'edit'])->name('datos.edit');
    Route::delete('/datos/{dato}', [DatosController::class, 'destroy'])->name('datos.destroy');
    Route::put('/datos/{dato}', [DatosController::class, 'update'])->name('datos.update');
    //seccion de noticias
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

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
    //Seccion de empresas kineclub
    Route::get('/kine', [KineController::class, 'index'])->name('kine.index');
    Route::post('/kine', [KineController::class, 'store'])->name('kine.store');
    Route::delete('/kine/{kine}', [KineController::class, 'destroy'])->name('kine.destroy');
    Route::get('/kine/{kine}/edit', [KineController::class, 'edit'])->name('kine.edit');
    Route::put('/kine/{kine}', [KineController::class, 'update'])->name('kine.update');
});


require __DIR__ . '/auth.php';