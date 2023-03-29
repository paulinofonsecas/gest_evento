<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aparelho>
 */
class AparelhoFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'descricao' => fake()->text(),
            'preco_de_aluguer' => fake()->randomNumber() * 2500,
            'periodo_minimo_de_aluger' => fake()->time(),
            'disponibilidade_id' => 1,
        ];
    }
}
