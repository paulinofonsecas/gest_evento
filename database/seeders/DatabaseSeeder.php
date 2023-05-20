<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Aluger;
use App\Models\Aparelho;
use App\Models\Categoria;
use App\Models\Disponibilidade;
use App\Models\Emprestimo;
use App\Models\EstadoDeAluger;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Usertype::insert([
        //     'descricao' => 'admin',
        // ]);
        // Usertype::insert([
        //     'descricao' => 'cliente',
        // ]);
        // Usertype::insert([
        //     'descricao' => 'convidado',
        // ]);

        // Categoria::insert([
        //     'descricao' => 'Música',
        // ]);
        // Categoria::insert([
        //     'descricao' => 'Luzes',
        // ]);
        // Categoria::insert([
        //     'descricao' => 'decoração',
        // ]);

        // Disponibilidade::create(
        //     ['descricao' => 'disponivel'],
        // );
        // Disponibilidade::create(
        //     ['descricao' => 'ocupado'],
        // );

        // Aparelho::create([
        //     'nome' => 'Coluna grande',
        //     'descricao' => 'teste',
        //     'preco_de_aluguer' => '25000',
        //     'categoria_id' => 1,
        //     'disponibilidade_id' => 1,
        // ]);

        // Aparelho::create([
        //     'nome' => 'Coluna grande',
        //     'descricao' => 'teste',
        //     'preco_de_aluguer' => '25000',
        //     'categoria_id' => 1,
        //     'disponibilidade_id' => 1,
        // ]);

        // Aparelho::create([
        //     'nome' => 'Coluna grande',
        //     'descricao' => 'teste',
        //     'preco_de_aluguer' => '25000',
        //     'categoria_id' => 1,
        //     'disponibilidade_id' => 1,
        // ]);

        // EstadoDeAluger::create([
        //     'descricao' => 'Aguardando',
        // ]);
        // EstadoDeAluger::create([
        //     'descricao' => 'Aceite',
        // ]);
        // EstadoDeAluger::create([
        //     'descricao' => 'Finalizado',
        // ]);

        // $aluger = Aluger::create([
        //     'my_user_id' => 1,
        //     'data_aluger' => date('Y/m/d'),
        //     'data_devolucao' => date('Y/m/d'),
        //     'estado_de_aluger_id' => EstadoDeAluger::AGUARDANDO,
        // ]);

        // Emprestimo::create([
        //     'aluger_id' => $aluger->id,
        //     'aparelho_id' => 1,
        // ]);

        // Emprestimo::create([
        //     'aluger_id' => $aluger->id,
        //     'aparelho_id' => 2,
        // ]);

        // invoca a EventoSeder
        $this->call(EventoSeeder::class);

    }
}
