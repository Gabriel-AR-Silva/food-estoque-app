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
        return view('/validade');
    }
}
