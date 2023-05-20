<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // semeia 10 eventos
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Evento::factory()->create();
        }
    }
}
