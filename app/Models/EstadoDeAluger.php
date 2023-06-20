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
    public const REJEITADO = 5;
    public const CANCELADO = 6;
    public const AGUARDADNDO_PAGAMENTO = 7;
    public const FINALIZADO = 3;
    public const PAGO = 8;

    protected $fillable = [
        'descricao',
    ];
}
