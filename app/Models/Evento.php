<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_evento',
        'data_termino',
        'descricao',
        'localizacao',
        'pacote_id',
        'estado_evento_id',
        'user_id',
    ];

    public function estadoEvento()
    {
        return $this->hasOne(EstadoDeAluger::class, 'id', 'estado_evento_id');
    }

    public function pacote()
    {
        return $this->hasOne(Aparelho::class, 'id', 'pacote_id');
    }
}
