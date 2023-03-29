<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoDeAluger extends Model
{
    use HasFactory;

    public const AGUARDANDO = 1;
    public const ACEITE = 2;
    public const RECEBIDO = 3;
    public const REJEITADO = 4;

    protected $fillable =[
        'descricao',
    ];
}
