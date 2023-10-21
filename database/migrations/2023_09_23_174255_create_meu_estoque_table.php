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
        Schema::create('meu_estoque', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cesta_id')->nullable();
            $table->foreign('cesta_id')->references('id')->on('cesta');
            $table->string('titulo', 30);
            $table->string('descricao', 100);
            $table->string('categoria', 105);
            $table->string('unidade_medida', 10);
            $table->float('quantidade');
            $table->string('foto', 255);
            $table->datetime('validade');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }
};