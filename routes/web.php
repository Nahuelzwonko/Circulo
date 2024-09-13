<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AsociateController;
use App\Http\Controllers\ConsultorioController;
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
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\KineController;
use App\Http\Controllers\UserFileController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\EvaluacionKinesicaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SorteoController;
use App\Http\Controllers\SorteoAdminController;
use App\Http\Controllers\DiarioController;
use App\Models\EvaluacionKinesica;



use Illuminate\Support\Facades\Response;
use App\Models\Post;
// Rutas públicas
Route::get('/', HomeContoller::class);
Route::get('kineClub', [KineclubController::class, 'index'])->name('kineClub.index');
Route::get('sorteo', [SorteoController::class, 'index'])->name('sorteo.index');
Route::get('/sorteos/{sorteo}/inscribirse', [SorteoController::class, 'mostrarFormularioInscripcion'])->name('sorteos.mostrarFormularioInscripcion');
Route::post('/sorteo/{sorteo}/inscribirse', [SorteoController::class, 'inscribirse'])->name('sorteos.inscribirse');

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
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/home', function () {
        $username = auth()->user()->name;
        return view('user_home', compact('username'));
    })->name('user.home');
    Route::get('/user/tarjeta', [TarjetaController::class, 'Tarjeta'])->name('tarjeta');
    Route::post('/activar-tarjeta', [TarjetaController::class, 'activateCard'])->name('tarjeta.activate');

    //rutas de fullCalendar
    Route::get('/user/getevent', [EventoController::class, 'index'])->name('getevent');
    Route::post('/user/agregar', [EventoController::class, 'store'])->name('store');
    Route::get('/user/editar/{id}', [EventoController::class, 'edit'])->name('edit');
    Route::post('/user/editar/{id}', [EventoController::class, 'update'])->name('update');
    Route::get('/user/success', [EventoController::class, 'success'])->name('success');
    Route::get('/user/mostrar', [EventoController::class, 'show'])->name('show');
    Route::delete('/user/eliminar/{id}', [EventoController::class, 'destroy'])->name('destroy');
    //end rutas fullCalendar
    Route::get('/user/consultorio', [ConsultorioController::class, 'Consultorio'])->name('consultorio');
    Route::get('/user/ficha_kinesica', [EvaluacionKinesicaController::class, 'create'])->name('ficha-kinesica');
    Route::post('/user/ficha_kinesica', [EvaluacionKinesicaController::class, 'store'])->name('evaluacion-kinesica.store');
    Route::get('/mostrar-tabla-datos', [EvaluacionKinesicaController::class, 'mostrarTablaDatos'])->name('mostrar.tabla.datos');
    Route::get('/mostrar-formularios', [EvaluacionKinesicaController::class, 'mostrarFormularios'])->name('mostrar_formularios');
    Route::get('/formulario/{id}/edit', [EvaluacionKinesicaController::class, 'edit'])->name('formulario.edit');
    Route::put('/formulario/{id}', [EvaluacionKinesicaController::class, 'update'])->name('formulario.update')->middleware('web');
    Route::delete('/formulario/{id}', [EvaluacionKinesicaController::class, 'destroy'])->name('formulario.destroy');
    Route::get('/formulario/{id}/pdf', [EvaluacionKinesicaController::class, 'generarPDF'])->name('formulario.pdf');
    Route::get('carga-archivos', [UserFileController::class, 'createForm'])->name('user-files.create');
    Route::post('/cargar-archivos', [UserFileController::class, 'store'])->name('user-files.store');
    Route::get('/ver-archivos/{id}', [UserFileController::class, 'show'])->name('user-files.show');
    Route::get('/editar-archivos/{id}', [UserFileController::class, 'editForm'])->name('user-files.edit');
    Route::put('/actualizar-archivos', [UserFileController::class, 'update'])->name('user-files.update');
    //New route for diario
    Route::get('/user/diario', [DiarioController::class, 'index']);
    

});

// Rutas privadas para administrador
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

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
    //Datos de los usuarios
    Route::get('/admin/user-files', [AdminController::class, 'userFiles'])->name('admin.user-files');
    Route::get('/admin/download-all', [AdminController::class, 'downloadAll'])->name('admin.download-all');
    Route::get('/admin/user-files/show/{id}', [AdminController::class, 'showUserFiles'])->name('admin.user-files.show');
    //Datos de cursos
    Route::get('/admin/sorteos', [SorteoAdminController::class, 'index'])->name('admin.sorteos.index');
    Route::get('/admin/sorteos/create', [SorteoAdminController::class, 'create'])->name('admin.sorteos.create');
    Route::post('/admin/sorteos', [SorteoAdminController::class, 'store'])->name('admin.sorteos.store');
    Route::get('/admin/sorteos/{sorteo}/edit', [SorteoAdminController::class, 'edit'])->name('admin.sorteos.edit');
    Route::put('/admin/sorteos/{sorteo}', [SorteoAdminController::class, 'update'])->name('admin.sorteos.update');
    Route::delete('/admin/sorteos/{sorteo}', [SorteoAdminController::class, 'destroy'])->name('admin.sorteos.destroy');
    Route::get('/admin/sorteos/{sorteo}/descargar', [SorteoAdminController::class, 'descargar'])->name('admin.sorteos.descargar');
    Route::post('admin/sorteos/{sorteo}/cambiar-estado', [SorteoAdminController::class, 'cambiarEstado'])->name('admin.sorteos.cambiarEstado');


});


require __DIR__ . '/auth.php';
