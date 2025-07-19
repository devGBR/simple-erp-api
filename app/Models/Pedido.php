<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        "variacao_id",
        "user_id",
        "logradouro",
        "bairro",
        "cidade",
        "numero",
        "cep",
        "estado",
        "pais",
        "status"
    ];

    public function variacao()
    {
        return $this->belongsTo(VariacaoProduto::class, 'variacao_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

