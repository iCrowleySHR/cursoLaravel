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
        // Tabela que vai ter a alteração
        // Schema::table('produto', function(Blueprint $table){
        //     //Nome atual da coluna e novo nome
        //     // $table->renameColumn('nomee','nome');

        //     // nome da coluna que vai remover
        //     // $table->dropColumn('nomeCompleto');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alteracao_banco');
    }
};
