<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::prefix('home')->group(function(){
        Route::get('/clients', [ClienteController::class, 'index'])->name('clients.index'); //Mostrar
        Route::get('/clients/{client}', [ClienteController::class, 'show'])->name('clients.show'); //Buscar
        Route::post('/clients', [ClienteController::class, 'store'])->name('clients.store'); //Criar
        Route::put('/clients/{client}', [ClienteController::class, 'update'])->name('clients.update'); //Alterar
        Route::delete('/clients/{client}', [ClienteController::class, 'destroy'])->name('clients.destroy'); //Deletar

});
