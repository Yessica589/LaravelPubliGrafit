<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProveedor;
use Illuminate\Http\Request;

class CategoriaProveedorController extends Controller
{
    public function index()
    {
        $categoriaproveedores= CategoriaProveedor::paginate(4);
        return view('categoriaproveedor.index', compact('categoriaproveedores'));
    }

    public function create()
    {
        return view(view:'categoriaproveedor.create');
    }

    public function store(Request $request)

    {
        CategoriaProveedor::create($request->all());
        return redirect()->route('categoriaproveedor.index')->with('success', 'Categoría creada correctamente');
    }

    public function edit(CategoriaProveedor $categoriaproveedor)
    {
        return view('categoriaproveedor.edit', compact('categoriaproveedor'));
    }

    public function update(Request $request, CategoriaProveedor $categoriaproveedor)
    {
        //$user=User::findOrFail($id);
        $data=$request->except('_token', '_method');
        $categoriaproveedor->update($data);        
        return redirect()->route('categoriaproveedor.index')->with('success', 'Categoría proveedor actualizada correctamente');
    }
}
