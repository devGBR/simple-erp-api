<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariacaoProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        "produto_id",
        "tamanho",
        "cor",
    ];
    public function estoques()
    {
        return $this->hasMany(Estoque::class, 'variacao_produto_id');
    }

}
