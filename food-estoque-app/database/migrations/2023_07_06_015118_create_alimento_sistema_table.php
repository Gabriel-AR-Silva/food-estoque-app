<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alimento_sistema', function (Blueprint $table) {
            $table->id();
            $table->string("title", 150);
            $table->string("descricao", 450);
            $table->string("categoria", 150)->nullable();
            $table->string("unidade_medida", 10);
            $table->decimal(8,2);
            $table->string("foto", 255);
        });
    }
};
