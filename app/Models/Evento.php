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

    public function backgroundColor() {
        /*
            AGUARDANDO (1#FFFF00 (Amarelo)
            ACEITE (2#00FF00 (Verde)
            EM_PROGRESSO (4#0000FF (Azul)
            REJEITADO (5#FF0000 (Vermelho)
            CANCELADO (6#808080 (Cinza)
            AGUARDADNDO_PAGAMENTO (7#FFA500 (Laranja)
            FINALIZADO (3#800080 (Roxo)
            PAGO (8#FFC0CB (Rosa)
        */

        if ($this->estado_evento_id == EstadoDeAluger::AGUARDANDO){
            return '#FFE608';
        } else if ($this->estado_evento_id == EstadoDeAluger::ACEITE){
            return '#30FF4D';
        } else if ($this->estado_evento_id == EstadoDeAluger::EM_PROGRESSO){
            return '#0096E1';
        } else if ($this->estado_evento_id == EstadoDeAluger::REJEITADO){
            return '#FF4848';
        } else if ($this->estado_evento_id == EstadoDeAluger::CANCELADO){
            return '#858081';
        } else if ($this->estado_evento_id == EstadoDeAluger::AGUARDADNDO_PAGAMENTO){
            return '#FF9D20';
        } else if ($this->estado_evento_id == EstadoDeAluger::FINALIZADO){
            return '#AE37D1';
        } else if ($this->estado_evento_id == EstadoDeAluger::PAGO){
            return '#FF5DA9';
        }
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
