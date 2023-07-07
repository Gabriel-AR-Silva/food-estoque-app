<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cesta extends Model
{
    use HasFactory;

    protected $table = 'cesta';

    public function meu_estoque_cesta() {
        return $this->hasMany(MeuEstoque::class);
    }
}
