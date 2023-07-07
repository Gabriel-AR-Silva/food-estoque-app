<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reestoque extends Model
{
    use HasFactory;

    protected $table = 'reestoque';

    public function cesta() {
        return $this->belongsTo(Cesta::class);
    }
}
