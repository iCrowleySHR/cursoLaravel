<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// Importe essa classe para usar a slug
use Illuminate\Support\Str;

// Como tem chaves estrageiras na tabela, para inserir o valor precisamos incluir as classes model
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400,400), // gera imagens, colocamos a resolução
            'id_user'=> User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random()
        ];
    }
}
