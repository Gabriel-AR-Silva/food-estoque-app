<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReestoqueController extends Controller
{
    public function index() {
        return view('/reestoque');
    }
}