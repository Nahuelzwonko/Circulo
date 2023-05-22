<?php

use App\Http\Controllers\AsociateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuienesController;
use  App\Http\Controllers\KineclubController;
use App\Http\Controllers\ObrasController;
use App\Http\Controllers\ProfecionalesController;
use App\Models\Post;
//rutas publicas

Route::get('/', HomeContoller::class);
Route::get('/kineClub', [KineclubController::class, 'index' ])->name('kine.index');
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::get('quienes', [QuienesController::class, 'index'])->name('quienes.index');
Route::get('obras', [ObrasController::class, 'index'])->name('obras.index');
Route::get('asociate', [AsociateController::class, 'index'])->name('asociate.index');
Route::get('profecionales', [ProfecionalesController::class, 'index'])->name('profecionales.index');
Route::get('/allPost', function(){
    return view('allPost',[
        'posts' => Post::where('active', true)->get()
    ]);
})->name('allPost');

//Rutas privadas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'view'])->name('posts.view');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete');

require __DIR__.'/auth.php';