<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            // criar um evento com estado agendado
            'estado_evento_id' => 1,
            // randomisa os usuarios existentes
            'data_evento' => $this->faker->dateTimeBetween('now')->format('Y-m-d H:i:s'),
            'data_termino' => $this->faker->dateTimeBetween('now')->format('Y-m-d H:i:s'),
            'localizacao' => $this->faker->address(),
            'descricao' => $this->faker->text(),
            'user_id' => $this->faker->numberBetween(1, 2),
            'pacote_id' => 4,
        ];
    }
}
