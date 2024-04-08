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
        //Excluir a tabela Produto
        //Schema::drop('produto');
        //ou
        //Excluir se existir a tabela produto
        Schema::dropIfExists('produto');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
