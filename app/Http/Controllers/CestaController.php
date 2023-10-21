<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cesta;
use Inertia\Inertia;

class CestaController extends Controller
{
    public function index() {
        $cestas = Cesta::take(10)->get();
        return Inertia::render('Cestas/Index', ["cestas" => $cestas]);
    }
}