<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aluger extends Model
{
    use HasFactory;

    protected $fillable = [
        'my_user_id',
        'data_aluger',
        'data_devolucao',
        'estado_de_aluger_id',
    ];

    public function estadoAluger() {
        return $this->hasOne(EstadoDeAluger::class, 'id', 'estado_de_aluger_id');
    }

    public function aparelhos()
    {
        $emprestimos = Emprestimo::where('aluger_id', '=', $this->id)->get();
        $aparelhos = [];
        foreach ($emprestimos as $emprestimo) {
            $aparelhos[] = $emprestimo->aparelho;
        }

        return $aparelhos;
    }

    public function preco() {
        $preco = 0;
        $aparelhos = $this->aparelhos();

        foreach ($aparelhos as $aparelho) {
            $preco += $aparelho->preco_de_aluguer;
        }

        return $preco;
    }

    public function aparelhos_count()
    {
        return sizeof($this->aparelhos());
    }
}
