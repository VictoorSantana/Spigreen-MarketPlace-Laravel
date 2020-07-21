<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoData extends Model
{
    protected $fillable = [        
        'tipo',
        'nome',
        'desconto',
        'valor',
        'valor_antes',
        'parcela',
        'descricao',
        'imagem_path'
    ];

}
