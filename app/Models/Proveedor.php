<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreproveedor',
        'nombreempresa',
        'telefono',
        'celular',
        'email',
        'direccion',
        'idcategoria',
        'estado',
    ];

    // public static $rules = [
    //     'nombreproveedor'=>'required|string|min:2',
    //     'nombreempresa'=>'required|string|min:2',
    //     'telefono'=>'numeric|min:0',
    //     'celular'=>'numeric|min:0',
    //     'email'=>'required|string|min:2',
    //     'direccion'=>'required|string|min:2',
    //     'idcategoria'=>'required|exists:categoriaproveedor,id',
    //     'estado'=>'in:1,0',
    // ];
}
