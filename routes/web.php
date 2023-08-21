<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index'); //Mostrar
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show'); //Buscar
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store'); //Criar
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update'); //Alterar
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy'); //Deletar