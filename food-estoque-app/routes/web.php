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
    return view('welcome');
});

Route::get('/food-estoque', function () {
    return view('food-estoque');
});

Route::get('/meu-estoque', function () {
    return view('meu-estoque');
});

Route::get('/reestoque', function () {
    return view('reestoque');
});

Route::get('/cestas', function () {
    return view('cestas');
});

Route::get('/validade', function () {
    return view('validade');
});
