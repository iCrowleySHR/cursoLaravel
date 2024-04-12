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

        Schema::create('produtos', function (Blueprint $table) {
            // id primarykey
            $table->id();

            // cria uma string no banco
            $table->string('nome');

            // cria uma text no banco
            $table->text('descricao');

            // cria uma coluna que aceita numeros
            $table->double('preco');

            // um titulo para url
            $table->string('slug');

            // guarda o caminho da imagem aceita nulo
            $table->string('imagem')->nullable();

            // coluna de chave estrangeira
            $table->unsignedBigInteger('id_user');

            // configurando a chave estrangeira
            //          //colunas      //coluna que pega  //da tabela users
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // cascade serve para atualizar ou apagar tudo aonde o id 1 estiver, caso seja excluido

            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

            // cria o uptededUp e CreateAt
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
        Schema::dropIfExists('produtos');
    }
};
