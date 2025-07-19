<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("cpf");
            $table->string("telefone");
            $table->string("data_nascimento");
            $table->string("logradouro");
            $table->string("bairro");
            $table->string("cidade");
            $table->string("numero");
            $table->integer("cep");
            $table->string("estado");
            $table->string("pais");
            $table->string('password');
            $table->string("api_token")->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
