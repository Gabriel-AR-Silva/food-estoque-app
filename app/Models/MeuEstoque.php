<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeuEstoque extends Model
{
    use HasFactory;

    protected $table = 'meu_estoque';

    public function cesta() {
        return $this->belongsTo(Cesta::class);
    }
}