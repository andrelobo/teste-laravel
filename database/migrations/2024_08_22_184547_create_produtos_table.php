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
            $table->id(); // Cria uma coluna auto-incremental 'id'
            $table->string('nome', 50); // Nome do produto
            $table->string('descricao', 200); // Descrição do produto
            $table->decimal('preco', 8, 2); // Preço do produto (8 dígitos no total, 2 após o ponto decimal)
            $table->date('data_validade'); // Data de validade
            $table->string('imagem'); // Nome do arquivo da imagem
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade'); // Chave estrangeira para categorias
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
