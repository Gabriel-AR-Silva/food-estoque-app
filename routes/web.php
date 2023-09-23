<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





/*
    Branch Main logo abaixo
*/

Route::get('/', function () {
    return view('welcome');
});

// // Rota para testes
// Route::get('/teste', function () {
//     $cestas = Cesta::factory()->count(20)->create()->toArray();
//     // $cestas->load([
//     //     'cestas'
//     // ]);
//     dd($cestas);
// });

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



