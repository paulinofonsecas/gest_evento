<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparelho extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco_de_aluguer',
        'disponibilidade_id',
        'image_url',
    ];

    public function disponibilidade()
    {
        return $this->hasOne(Disponibilidade::class, 'id', 'disponibilidade_id');
    }
}
