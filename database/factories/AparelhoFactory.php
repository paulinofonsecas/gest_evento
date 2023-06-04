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
            'nome' => $this->faker->word,
            'descricao' => $this->faker->paragraph,
            'preco_de_aluguer' => $this->faker->randomFloat(2, 10, 100),
            'disponibilidade_id' => 1,
        ];
    }
}

