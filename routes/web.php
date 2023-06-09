<?php
use App\Http\Controllers\CarrosController;
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
Route::get('/carros/novo', [CarrosController::class, 'create'])->name('carros.novo');

// Rota para o mostrar um carro específico
Route::get('/carros/{carro}', [CarrosController::class, 'show'])->name('carros.show');

// Rota para o formulário de edição de carros
Route::get('/carros/{carro}/editar', [CarrosController::class, 'edit'])->name('carros.edit');

// Rota que armazena um novo carro no banco de dados
Route::post('/carros', [CarrosController::class, 'store'])->name('carros.store');

// Rota que atualiza um carro específico no banco de dados
Route::put('/carros/{carro}', [CarrosController::class, 'update'])->name('carros.update');

// Rota que remove um carro específico do banco de dados
Route::delete('/carros/{carro}', [CarrosController::class, 'destroy'])->name('carros.destroy');

