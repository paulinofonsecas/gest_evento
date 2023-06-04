<?php

namespace Database\Factories;

use App\Models\Aparelho;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $aparelhos = Aparelho::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();

        return [
            'estado_evento_id' => 1,
            'data_evento' => $this->faker->dateTimeBetween('now')->format('Y-m-d H:i:s'),
            'data_termino' => $this->faker->dateTimeBetween('now')->format('Y-m-d H:i:s'),
            'localizacao' => $this->faker->address(),
            'descricao' => $this->faker->text(),
            'user_id' => $this->faker->randomElement($users),
            'pacote_id' => $this->faker->randomElement($aparelhos),
        ];

    }
}
