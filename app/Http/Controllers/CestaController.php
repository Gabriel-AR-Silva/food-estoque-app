<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cesta;

class CestaController extends Controller
{
    public function index() {
        $cestas = Cesta::take(10)->get();
        return view('/cestas', ["cestas" => $cestas]);
    }
}