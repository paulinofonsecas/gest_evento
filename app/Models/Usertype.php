<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    use HasFactory;

    public const ADMIN = 1;
    public const NORMAL = 2;
    public const CONVIDADO = 3;

    protected $fillable = [
        'descricao',
    ];
}
