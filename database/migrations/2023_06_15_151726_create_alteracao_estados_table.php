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
        Schema::create('alteracao_estados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estado_anterior_id')->constrained('estado_de_alugers');
            $table->foreignId('estado_novo_id')->constrained('estado_de_alugers');
            $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alteracao_estados');
    }
};
