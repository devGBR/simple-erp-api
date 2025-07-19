<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    protected $fillable = [
        "quantidade",
        "categoria_id",
        "marca",
        "pais_origem",
        "tamanho",
        "unidade_medida",
        "variacao_produto_id", // corrigido aqui também
    ];

    public function variacao()
    {
        return $this->belongsTo(VariacaoProduto::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

