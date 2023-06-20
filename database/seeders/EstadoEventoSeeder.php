<?php

namespace Database\Seeders;

use App\Models\EstadoDeAluger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoDeAluger::create([
            'descricao' => 'Aguardando',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Aceite',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Finalizado',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Em progresso',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Rejeitado',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Cancelado',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Aguardando pagamento',
        ]);
        EstadoDeAluger::create([
            'descricao' => 'Pago',
        ]);
    }
}
