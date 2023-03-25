<?php

use App\Http\Controllers\GamesController;
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
    return view('welcome');
});

// Rota para a listagem de games
Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/games/novo', [GamesController::class, 'create'])->name('games.create');
Route::get('/games/{game}', [GamesController::class, 'show'])->name('games.show');
Route::post('/games', [GamesController::class, 'store'])->name('games.store');
Route::put('/games/{game}', [GatosController::class, 'update'])->name('game.update');
Route::delete('/games/{id}', [GatosController::class, 'destroy'])->name('games.destroy');

