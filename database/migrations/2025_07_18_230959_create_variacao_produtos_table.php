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
        Schema::create('variacao_produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("produto_id")->constrained("produtos")->onDelete("cascade");
            $table->string("tamanho")->nullable();
            $table->string("cor")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variacao_produtos');
    }
};
