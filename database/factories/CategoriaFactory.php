<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // colocaremos as colunas que vai inserir em massa
            // Vai criar uma unica palavra
            'nome' => $this->faker->unique()->word,

            // vai criar um texto
            'descricao' => $this->faker->text,

        
        ];
    }
}
