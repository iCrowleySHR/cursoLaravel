<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Para inserir precisamos acessar a model
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

        // Para rodar precisa mexer no arquivo DatabaseSeeder
    {
        //Função create para inserir dados
        User::create([
            'firstName' => 'Gusdtavo',
            'lastName' => 'Guadlda',
            'email' => 'gualda@dgustavo.com',
            'password' => bcrypt('1d234'), //Para criptografar a senha
        ]);
    }
}
