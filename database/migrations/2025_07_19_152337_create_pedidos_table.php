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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("produto_id")->constrained("produtos");
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->string("logradouro");
            $table->string("bairro");
            $table->string("cidade");
            $table->string("numero");
            $table->string("cep");
            $table->string("estado");
            $table->string("pais");
            // $table->string("data_pagamento");
            // $table->string("pagamento_id");
            $table->enum('status', ["cancelado", "pendente", "concluido"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
