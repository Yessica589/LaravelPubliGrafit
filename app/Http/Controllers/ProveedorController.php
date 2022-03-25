<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\CategoriaProveedor;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use DB;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores= Proveedor::paginate(4);
        return view('proveedor.index', compact('proveedores'));
    }

    public function create(){
        $categoriaproveedores = CategoriaProveedor::all();
        return view('proveedor.create', compact("categoriaproveedores"));
    }

    public function store(Request $request)

    {
        Proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success', 'Proveedor creado correctamente');
    }

    public function show($id)
    {
        $detalle = DB::select("SELECT p.id, nombreproveedor, nombreempresa, telefono, celular, email, direccion, nombrecategoria, p.estado, p.created_at  FROM proveedors as p JOIN categoria_proveedors as cp WHERE p.idcategoria=cp.id and p.id = $id");
       
        return view('proveedor.show', compact('detalle'));
    }

    public function edit($id)
    {
        $proveedores = DB::select("SELECT p.id, nombreproveedor, nombreempresa, telefono, celular, email, direccion, p.idcategoria, cp.nombrecategoria, p.estado, p.created_at FROM proveedors as p JOIN categoria_proveedors as cp WHERE p.idcategoria = cp.id and p.id = $id");
        $categoriaproveedores = CategoriaProveedor::all();
       return view('proveedor.edit', compact('proveedores', 'categoriaproveedores'));
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        //$user=User::findOrFail($id);
        $data=$request->only( 'nombreproveedor', 'nombreempresa', 'telefono', 'celular', 'email', 'direccion', 'idcategoria', 'estado');
        $proveedor->update($data);
        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado correctamente');
    }
}