<?php

namespace App\Http\Controllers;

use App\Models\ProductoTerminado;
use Illuminate\Http\Request;

class ProductoTerminadoController extends Controller
{
    public function index()
    {
        $productoterminados= ProductoTerminado::paginate(4);
        return view('productoterminado.index', compact('productoterminados'));
    }

    public function create()
    {
        return view('productoterminado.create');
    }

    public function store(Request $request)

    {
        ProductoTerminado::create($request->all());
        return redirect()->route('productoterminado.index')->with('success', 'Producto  creado correctamente');
    }

    public function edit(ProductoTerminado $productoterminado)
    {
        return view('productoterminado.edit', compact('productoterminado'));
    }

    public function update(Request $request, ProductoTerminado $productoterminado)
    {
        //$user=User::findOrFail($id);
        $data=$request->only( 'nombreproducto', 'cantidadproducto', 'precioproducto', 'estado');
        $productoterminado->update($data);
        return redirect()->route('productoterminado.index')->with('success', 'producto actualizado correctamente');
    }
}