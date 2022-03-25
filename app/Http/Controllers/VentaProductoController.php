<?php

namespace App\Http\Controllers;

use App\Models\VentaProducto;
use App\Models\Cliente;
use App\Models\ProductoTerminado;
use App\Models\Venta;
use Illuminate\Http\Request;
use DB; 

class VentaProductoController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        $productoterminados = ProductoTerminado::all();
        return view("ventaproducto.index", compact("clientes", "productoterminados" ));
    }
    
    public function store(Request $request)
    {
       $input = $request -> all();
       try {
        DB::beginTransaction();
        $venta = Venta::create([
            "idcliente" => $input["idcliente"],
            "fechaventa" => $input["fechaventa"],
            "preciototal" =>$this -> calcular_precio( $input["idproducto"],  $input["cantidades"] ),
        ]);
        foreach ($input["idproducto"] as $key => $value) {

            VentaProducto::create([
                "idproducto" => $value,
                "idventa" => $venta -> id, 
                "cantidadproducto" => $input["cantidades"][$key],
                
            ]);
            $pdt = ProductoTerminado::find($value);
            $pdt -> update(["cantidadproducto" => $pdt -> cantidadproducto - $input["cantidades"][$key]]);
        }
        
        DB:: commit();
        return redirect("/ventaproducto") -> with('status', '1');
       } catch (\Exception $e) {
           DB::rollBack();
           return redirect("/ventaproducto") -> with('status', $e -> getMessage());
       }
       
    }

    public function calcular_precio($productos, $cantidades){
        $precioproducto=0;
        foreach($productos as $key => $value){
            $producto = ProductoTerminado:: find($value);
            $precioproducto += ($producto -> precioproducto * $cantidades[$key]);
        }
        return $precioproducto;
    }
}
