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
        Schema::create('alugers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('my_user_id')->references('id')->on('users');
            $table->date('data_aluger');
            $table->date('data_devolucao');
            $table->foreignId('estado_de_aluger_id')->references('id')->on('estado_de_alugers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alugers');
    }
};
