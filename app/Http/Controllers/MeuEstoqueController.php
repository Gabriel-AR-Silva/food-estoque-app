<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeuEstoque;

class MeuEstoqueController extends Controller
{
    public function index() {
        $meu_estoque = MeuEstoque::take(30)->get();
        return view('/meu-estoque', ['meu_estoque' => $meu_estoque]);
    }

    public function meu_estoque_validade() {
        $meu_estoque_val = MeuEstoque::select('id', 'titulo', 'categoria', 'validade')->limit(20)->get();;
        return view('/validade', ['meu_estoque_val' => $meu_estoque_val]);
    }
}
