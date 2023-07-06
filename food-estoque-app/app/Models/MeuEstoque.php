<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeuEstoque extends Model
{
    use HasFactory;

    public function meu_estoque_cesta() {
        return $this->belongsTo('App\Models\MeuEstoqueCesta');
    }
}
