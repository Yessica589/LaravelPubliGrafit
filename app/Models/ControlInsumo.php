<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlInsumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreinsumo',
        'cantidadinsumo',
        'precioinsumo',
        'estado',
    ];

}
