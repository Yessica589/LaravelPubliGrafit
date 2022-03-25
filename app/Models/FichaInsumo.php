<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaInsumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'idficha',
        'idinsumo',
        'cantidadinsumo',
    ];
}
