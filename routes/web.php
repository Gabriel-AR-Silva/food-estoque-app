<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cesta;
use App\Http\Controllers\{
    CestaController,
    MeuEstoqueController,
    ReestoqueController
};

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
    return view('welcome');
});

// Rota para testes
Route::get('/teste', function () {
    $cestas = Cesta::factory()->count(10)->create()->toArray();
    // $cestas->load([
    //     'cestas'
    // ]);
    dd($cestas);
});

// Route::get('/food-estoque', [AdminController::class, 'index']);
Route::get('/food-estoque', function () {
    return view('food-estoque');
});

/**
 *  Meu Estoque
 */
Route::get('/meu-estoque', [MeuEstoqueController::class, 'index']);
Route::get('/meu-estoque/validade', [MeuEstoqueController::class, 'meu_estoque_validade']);

/**
 *  Reestoque
 */
Route::get('/reestoque', [ReestoqueController::class, 'index']);

/**
 *  Cestas
 */
Route::get('/cestas', [CestaController::class, 'index']);



