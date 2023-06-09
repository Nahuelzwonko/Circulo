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
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\EvaluacionKinesicaController;
use App\Models\EvaluacionKinesica;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\Response;
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
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/home', function () {
        $username = auth()->user()->name;
        return view('user_home', compact('username'));
    })->name('user.home');

    Route::get('/user/tarjeta', [TarjetaController::class, 'Tarjeta'])->name('tarjeta');
    Route::get('/user/getevent', [FullCalendarController::class, 'getEvent'])->name('getevent');
    Route::post('/user/storeevent', [FullCalendarController::class, 'store'])->name('storeevent');
    Route::patch('/user/update/{id}', [FullCalendarController::class, 'update'])->name('update');
    Route::delete('/user/destroy/{id}', [FullCalendarController::class, 'destroy'])->name('destroy');
    Route::get('/user/consultorio', [ConsultorioController::class, 'Consultorio'])->name('consultorio');
    Route::get('/user/ficha-kinesica', [ConsultorioController::class, 'mostrarFormulario'])->name('ficha-kinesica');
    Route::post('/evaluacion-kinesica', [EvaluacionKinesicaController::class, 'store'])->name('evaluacion-kinesica.store');
    Route::get('/evaluacion-kinesica/lista', [EvaluacionKinesicaController::class, 'lista'])->name('evaluacion-kinesica.lista');
    Route::get('/evaluacion-kinesica/{id}/edit', [EvaluacionKinesicaController::class, 'edit'])->name('evaluacion-kinesica.edit');
    Route::patch('/evaluacion-kinesica/{id}', [EvaluacionKinesicaController::class, 'update'])->name('evaluacion-kinesica.update');
    Route::get('/evaluacion-kinesica/{id}/descargar', function ($id) {
        // Obtener la evaluación kinesica por ID
        $evaluacion = EvaluacionKinesica::findOrFail($id);

        // Crear una instancia de Dompdf
        $dompdf = new Dompdf();

        // Renderizar la vista 'pdf.ficha_kinesica' y pasar los datos de la evaluación
        $html = view('pdf.ficha_kinesica', compact('evaluacion'))->render();

        // Cargar el contenido HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->render();

        // Obtener el contenido del PDF como una cadena de bytes
        $output = $dompdf->output();

        // Crear una respuesta para descargar el archivo PDF
        $response = Response::make($output, 200);
        $response->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', 'attachment; filename="' . $evaluacion->nombre . ' Ficha Kinesica.pdf"');


        return $response;
    })->name('evaluacion-kinesica.descargar');

});

// Rutas privadas para administrador
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
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