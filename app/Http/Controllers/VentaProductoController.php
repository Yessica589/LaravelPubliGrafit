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
    public function index(Request $request)
    {
        $id = $request -> input("id");
        $productos = [];
        if ($id != null) {
            $productos = ProductoTerminado:: select("productos.*", "producto_terminados.cantidadproducto as cantidad_c")
            -> join("producto_terminados", "idproducto", "=", "producto_terminados")
            -> get();
        }
        
        $clientes = DB::select('SELECT v.id, idcliente, preciototal, fechaventa, v.estado, c.nombrecompleto, v.created_at FROM ventas as v JOIN clientes as c WHERE v.idcliente = c.id');
        return view("ventaproducto.index", compact("clientes", "productos", ));
    }

    public function showProducto($id)
    {        
        if ($id != null) {
            $productos =DB::select('SELECT vp.idproducto, vp.cantidadproducto, pt.nombreproducto, vp.created_at FROM venta_productos as vp JOIN producto_terminados as pt WHERE idventa = ? and vp.idproducto = pt.id', [$id]);
        }
        
        /* return response()->json($insumos); */
        return view("ventaproducto.show", compact("productos", ));
    }

    public function create(){
        $productoterminados = ProductoTerminado::all();
        $clientes = Cliente::all();
        return view('ventaproducto.create', compact("productoterminados", "clientes"));
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
