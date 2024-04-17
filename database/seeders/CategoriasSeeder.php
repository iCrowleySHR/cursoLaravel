<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Devemos incluir a model
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chamamos a class e nela colocamos a quantidade de inserções que queremos
        Categoria::factory(10)->create();

        //Agora vamos para DatabaseSeeder
    }
}
