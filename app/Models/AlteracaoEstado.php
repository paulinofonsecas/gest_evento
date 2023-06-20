<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlteracaoEstado extends Model
{
    use HasFactory;

    protected $table = 'alteracao_estados';

    protected $fillable = [
        'estado_anterior_id',
        'estado_novo_id',
        'observacao',
    ];

    public function estadoAnterior()
    {
        return $this->belongsTo(Estado::class, 'estado_anterior_id');
    }

    public function estadoNovo()
    {
        return $this->belongsTo(Estado::class, 'estado_novo_id');
    }

}
