<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeuEstoque;
use Inertia\Inertia;

class MeuEstoqueController extends Controller
{
    public function index() {
        $meu_estoque = MeuEstoque::take(30)->get();
        return Inertia::render('MeusEstoques/Index', ['meu_estoque' => $meu_estoque]);
    }

    public function meu_estoque_validade() {
        $meu_estoque_val = MeuEstoque::select('id', 'titulo', 'categoria', 'validade')->limit(20)->get();
        return Inertia::render('Validades/Index', ['meu_estoque_val' => $meu_estoque_val]);
    }
}