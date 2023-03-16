<?php

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

// Rotas para o CRUD de carros

// Rota para a listagem de carros
Route::get('/carros', [CarrosController::class, 'index'])->name('carros.index');

// Rota para o formulário de criação de carros
Route::get('/carros/create', [CarrosController::class, 'create'])->name('carros.create');

// Rota para o mostrar um carros específico
Route::get('/carros/{id}', [CarrosController::class, 'show'])->name('carros.show');

// Rota para o formulário de edição de carros
Route::get('/carros/{id}/edit', [CarrosController::class, 'edit'])->name('carros.edit');

// Rota que armazena um novo carros no banco de dados
Route::post('/carros', [CarrosController::class, 'store'])->name('carros.store');

// Rota que atualiza um carros específico no banco de dados
Route::put('/carros/{id}', [CarrosController::class, 'update'])->name('carros.update');

// Rota que remove um carros específico do banco de dados
Route::delete('/carros/{id}', [CarrosController::class, 'destroy'])->name('carros.destroy');

