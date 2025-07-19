<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "preco",
        "preco_promocao",
        "descricao",
    ];

    public function variations()
    {
        return $this->hasMany(VariacaoProduto::class);
    }



}
