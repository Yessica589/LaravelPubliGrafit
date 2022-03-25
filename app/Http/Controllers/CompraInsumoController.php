<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\ControlInsumo;
use App\Models\Compra;
use App\Models\CompraInsumo;
use Illuminate\Http\Request;

class CompraInsumoController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        $controlinsumos = ControlInsumo::all();
        return view("comprainsumo.index", compact("proveedores", "controlinsumos" ));
    }
}
