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
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade");
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->string("marca");
            $table->string("pais_origem");
            $table->integer("tamanho");
            $table->string("unidade_medida", 2);
            $table->foreignId('variacao_produto_id')->constrained('variacao_produtos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};
