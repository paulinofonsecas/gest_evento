<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $fillable = [
        'aparelho_id',
        'aluger_id',
    ];

    public function aparelho() {
        return $this->hasOne(Aparelho::class, 'id', 'aparelho_id');
    }
}
