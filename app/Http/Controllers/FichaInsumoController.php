<?php

namespace App\Http\Controllers;

use App\Models\FichaTecnica;
use App\Models\ControlInsumo;
use App\Models\ProductoTerminado;
use App\Models\FichaInsumo;
use Illuminate\Http\Request;
use DB;

class FichaInsumoController extends Controller
{
    public function index(Request $request)
    {
        $id = $request -> input("id");
        $insumos = [];
        if ($id != null) {
            $insumos = ControlInsumo:: select("insumos.*", "ficha_insumo.cantidadinsumo as cantidad_c")
            -> join("ficha_insumo", "idinsumo", "=", "ficha_insumo")
            -> get();
        }
        
        $productoterminados = DB::select('SELECT ft.id, idproducto, precio, ft.estado, pt.nombreproducto, ft.created_at FROM ficha_tecnicas as ft JOIN producto_terminados as pt WHERE ft.idproducto = pt.id');
        return view("fichainsumo.index", compact("productoterminados", "insumos" ));
    }

    public function showInsumo($id)
    {        
        if ($id != null) {
            $insumos =DB::select('SELECT fi.idinsumo, fi.cantidadinsumo, ci.nombreinsumo, fi.created_at FROM ficha_insumos as fi JOIN control_insumos as ci WHERE idficha = ? and fi.idinsumo = ci.id', [$id]);
        }
        
        /* return response()->json($insumos); */
        return view("fichainsumo.show", compact("insumos", ));
    }
    
    public function create(){
        $productoterminados = ProductoTerminado::all();
        $controlinsumos = ControlInsumo::all();
        return view('fichainsumo.create', compact("productoterminados", "controlinsumos"));
    }

    public function store(Request $request)
    {

        $input = $request->all();
        try {
            DB::beginTransaction();
            $ficha = FichaTecnica::create([
                "idproducto" => $input["idproducto"],
                "precio" => $this->calcular_precio($input["idinsumo"], $input["cantidades"]),
            ]);

            foreach($input["idinsumo"] as $key => $value){
                FichaInsumo::create([
                    "idinsumo"=>$value,
                    "idficha"=>$ficha->id,
                    "cantidadinsumo" => $input["cantidades"][$key],
                    "precioinsumo" => $input["precioinsumo"][$key]
                ]);

                $ins = ControlInsumo::find($value);
                $ins->update(["cantidadinsumo"=> $ins->cantidadinsumo - $input["cantidades"][$key]]);
            }
            
            DB::commit();
            return redirect("/fichainsumo")->with('status', '1');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect("/fichainsumo")->with('status', $e->getMessage());
        }
    }

    public function calcular_precio($insumos, $cantidades)
    {
        $precioinsumo = 0;
        foreach ($insumos as $key => $value) {
            $insumo = ControlInsumo::find($value);
            $precioinsumo += ($insumo -> precioinsumo * $cantidades[$key]);
        }
        return $precioinsumo;
    }

    
}