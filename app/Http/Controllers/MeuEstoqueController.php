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
        $itensValidade = MeuEstoque::select('id', 'titulo', 'categoria', 'validade')->orderBy('validade', 'desc')->limit(20)->get();
        return Inertia::render('Validades/Index', ['itensValidade' => $itensValidade]);
    }
}