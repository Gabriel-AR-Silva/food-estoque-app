<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeuEstoqueController extends Controller
{
    public function index() {
        return view('/meu-estoque');
    }

    public function meu_estoque_validade() {
        return view('/validade');
    }
}
