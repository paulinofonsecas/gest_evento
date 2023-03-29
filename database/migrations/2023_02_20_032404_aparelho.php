<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * ##Aparelho
    *   - nome
    *   - descrição
    *   - preço de aluguel
    *   - período mínimo de aluguel
    *   - disponibilidade
    *   - categorias

     */
    public function up(): void
    {
        Schema::create('aparelhos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->double('preco_de_aluguer');
            $table->foreignId('disponibilidade_id')->references('id')->on('disponibilidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
