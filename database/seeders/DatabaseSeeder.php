<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Aluger;
use App\Models\Aparelho;
use App\Models\Categoria;
use App\Models\Disponibilidade;
use App\Models\Emprestimo;
use App\Models\EstadoDeAluger;
use App\Models\Evento;
use App\Models\Usertype;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Usertype::insert([
            'descricao' => 'admin',
        ]);
        Usertype::insert([
            'descricao' => 'cliente',
        ]);
        Usertype::insert([
            'descricao' => 'convidado',
        ]);

        Disponibilidade::create([
            'descricao' => 'Disponivel',
        ]);

        Disponibilidade::create([
            'descricao' => 'Indisponivel',
        ]);

        \App\Models\User::factory(10)->create();
        Aparelho::factory(10)->create();

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

        Evento::factory(10)->create();
    }
}
