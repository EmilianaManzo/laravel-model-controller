<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Pagina base con tutti i film
Route::get('/',[PageController::class, 'index'])->name('movies');
// Pagina base con i film migliori
Route::get('/film-migliori',[PageController::class, 'bestMovie'])->name('film-migliori');
// Pagina base con i film peggiori
Route::get('/film-peggiori',[PageController::class, 'worstMovie'])->name('film-peggiori');
// Pagina base con film singolo nel dettaglio
Route::get('/dettaglio', [PageController::class, 'details'])->name('dettaglio');



