<?php

namespace Database\Seeders;

use App\Models\Aparelho;
use Database\Factories\AparelhoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AparelhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Aparelho::factory()->create();
        }
    }
}
