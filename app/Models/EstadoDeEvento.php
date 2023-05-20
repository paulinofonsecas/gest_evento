<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoDeEvento extends Model
{
    use HasFactory;

    const AGUARDANDO = 1;
}
