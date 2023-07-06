<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Cesta;
use App\Models\MeuEstoque;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meu_estoque_cesta', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cesta::class);
            $table->foreignIdFor(MeuEstoque::class);
            $table->string("unidade_medida", 10);
            $table->decimal(8,2);
            $table->timestamps();
        });
    }
};
