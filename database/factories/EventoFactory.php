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

        // incrementa a data atual mas 10 dias randomicos
        return [
            'estado_evento_id' => 1,
            'data_evento' => $this->faker->dateTimeBetween('now', '+1 days')->format('Y-m-d H:i:s'), // '2021-06-01 00:00:00
            'data_termino' => $this->faker->dateTimeBetween('now', '+3 days')->format('Y-m-d H:i:s'), // '2021-06-01 00:00:00
            'localizacao' => $this->faker->address(),
            'descricao' => $this->faker->text(),
            'user_id' => $this->faker->randomElement($users),
            'pacote_id' => $this->faker->randomElement($aparelhos),
        ];

    }
}
