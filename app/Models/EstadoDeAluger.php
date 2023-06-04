<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoDeAluger extends Model
{
    use HasFactory;

    public const AGUARDANDO = 1;
    public const ACEITE = 2;
    public const EM_PROGRESSO = 4;
    public const REJEITADO = 6;
    public const CANCELADO = 7;
    public const AGUARDADNDO_PAGAMENTO = 5;
    public const FINALIZADO = 3;

    protected $fillable = [
        'descricao',
    ];
}
