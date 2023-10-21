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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cestas', function () {
    return Inertia::render('Cestas/Index');
})->middleware(['auth', 'verified'])->name('cestas.index');

Route::get('/meu-estoque', function () {
    return Inertia::render('MeusEstoques/Index');
})->middleware(['auth', 'verified'])->name('meuEstoque.index');

Route::get('/reestoque', function () {
    return Inertia::render('Reestoques/Index');
})->middleware(['auth', 'verified'])->name('reestoque.index');

Route::get('/meu-estoque/validade', function () {
    return Inertia::render('Validades/Index');
})->middleware(['auth', 'verified'])->name('validade.index');


// /**
//  *  Meu Estoque
//  */
// Route::get('/meu-estoque', [MeuEstoqueController::class, 'index']);
// Route::get('/meu-estoque/validade', [MeuEstoqueController::class, 'meu_estoque_validade']);

// /**
//  *  Reestoque
//  */
// Route::get('/reestoque', [ReestoqueController::class, 'index']);

// /**
//  *  Cestas
//  */
// Route::get('/cestas', [CestaController::class, 'index']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





/*
    Branch Main logo abaixo
*/

// // Rota para testes
// Route::get('/teste', function () {
//     $cestas = Cesta::factory()->count(20)->create()->toArray();
//     // $cestas->load([
//     //     'cestas'
//     // ]);
//     dd($cestas);
// });



