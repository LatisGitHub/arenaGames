<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\juegosController;
use App\Http\Controllers\equiposController;
use App\Http\Controllers\torneosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/inicio');
});

Route::middleware(['auth', 'rol:admin'])->group(function () {
    Route::get('/juegos', [juegosController::class, 'index'])->name('juegos.index');
    Route::get('/juegos/nuevo/nuevo', [juegosController::class, 'create']);
    Route::post('/juegos/crear', [juegosController::class, 'store']);
    Route::get('/juegos/{juego}/borrar', [juegosController::class, 'destroy']);
    Route::get('/torneos/nuevo/nuevo', [torneosController::class, 'create']);
    Route::post('/torneos/store', [torneosController::class, 'store']);
    Route::get('/torneos/{torneo}/borrar', [torneosController::class, 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/juegos', [juegosController::class, 'index'])->name('juegos.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/equipos', [equiposController::class, 'index'])->name('equipos.index');
    Route::get('/equipos/{equipo}/borrar', [equiposController::class, 'destroy']);
    Route::get('/equipos/{equipo}', [equiposController::class, 'show'])->name('equipos.show');
    Route::get('/equipos/{equipo}/jugadores/{user}', [equiposController::class, 'inscribir']);
    Route::get('/equipos/{equipo}/jugadores/{user}/borrar', [equiposController::class, 'desinscribir']);
    Route::get('/torneos/{torneo}', [torneosController::class, 'show'])->name('torneos.show');
    Route::get('/equipos/nuevo/nuevo', [equiposController::class, 'create']);
    Route::post('/equipos/store', [equiposController::class, 'store']);
    Route::post('/torneos/{torneo}/registrar', [torneosController::class, 'registrar']);
    Route::get('torneos/{torneo}/inscribir', [torneosController::class, 'inscribir']);
    Route::get('/torneos/{torneo}/equipos/{equipo}/borrar', [torneosController::class, 'desinscribir']);
    Route::get('/juegos/{juego}', [juegosController::class, 'show'])->name('juegos.show');
    Route::post('/torneo/buscar', [torneosController::class, 'buscarFecha'])->name('buscarFecha');
    Route::post('/torneo/buscarModalidad', [torneosController::class, 'buscarModalidad'])->name('buscarModalidad');
    Route::post('/equipo/buscarEstado', [equiposController::class, 'buscarEstado'])->name('buscarEstado');
    Route::post('/equipo/buscarModalidad', [equiposController::class, 'buscarModalidad'])->name('buscarModalidad');
    Route::post('/juego/buscarPlataforma', [juegosController::class, 'buscarPlataforma'])->name('buscarPlataforma');
    Route::post('/juego/buscarJuego', [juegosController::class, 'buscarJuego'])->name('buscarJuego');
});

Route::get('/inicio', [juegosController::class, 'inicio']);
Route::get('/torneos', [torneosController::class, 'index'])->name('torneos.index');
Route::get('/juegos', [juegosController::class, 'index'])->name('juegos.index');
Route::get('/dashboard', [torneosController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';
