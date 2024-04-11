<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Nela usaremos a função rename para alterar o nome da tabela que criamos no terminal
        //              Nome TB   Novo Nome
        // Schema::rename('produtos','produto');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
