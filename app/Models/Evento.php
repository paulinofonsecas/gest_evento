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

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function estadoEvento()
    {
        return $this->hasOne(EstadoDeAluger::class, 'id', 'estado_evento_id');
    }

    public function pacote()
    {
        return $this->hasOne(Aparelho::class, 'id', 'pacote_id');
    }

    public static function getEventosComEstadoAgendadoDoAno()
    {

        return Evento::whereYear('data_evento', date('Y'))->where('estado_evento_id', EstadoDeAluger::AGUARDANDO)->count();
    }

    public static function getEventosComEstadoAceiteDoAno()
    {

        return Evento::whereYear('data_evento', date('Y'))->where('estado_evento_id', EstadoDeAluger::ACEITE)->count();
    }

    public static function getEventosComEstadoFinalizadoDoAno()
    {

        return Evento::whereYear('data_evento', date('Y'))->where('estado_evento_id', EstadoDeAluger::FINALIZADO)->count();
    }
}
