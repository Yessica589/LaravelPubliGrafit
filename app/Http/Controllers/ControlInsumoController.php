<?php

namespace App\Http\Controllers;

use App\Models\ControlInsumo;
use Illuminate\Http\Request;

class ControlInsumoController extends Controller
{
    public function index()
    {
        $controlinsumos= ControlInsumo::paginate(4);
        return view('controlinsumo.index', compact('controlinsumos'));
    }

    public function create()
    {
        return view(view:'controlinsumo.create');
    }

    public function store(Request $request)

    {
        ControlInsumo::create($request->all());
        return redirect()->route('controlinsumo.index')->with('success', 'Insumo creado correctamente');
    }

    public function edit(ControlInsumo $controlinsumo)
    {
        return view('controlinsumo.edit', compact('controlinsumo'));
    }

    public function update(Request $request, ControlInsumo $controlinsumo)
    {
        //$user=User::findOrFail($id);
        $data=$request->only( 'nombreinsumo', 'cantidadinsumo', 'precioinsumo', 'estado');
        $controlinsumo->update($data);
        return redirect()->route('controlinsumo.index')->with('success', 'Insumo actualizado correctamente');
    }

    public function listar(Request $request){
        //consulto todos los productos y el nombre de la categoria a través de un join
        $controlinsumos = ControlInsumo::all();

        //Retornarmos el datatable
        return DataTables::of($controlinsumos)
        ->editColumn("estado", function($controlinsumo){
            return $controlinsumo->estado==1 ?"Activo" : "Inactivo";
        })
        //Adicionamos una columna con la opción de Inactivar o Activar para colocar dos botones
        ->addColumn('cambiar',function($controlinsumo){
            if ($controlinsumo->estado==1){ 
                return '<a class="btn btn-danger bt-sm" href="/controlinsumo/cambiar/estado/'.$controlinsumo->id.'/0">Inactivar</a>';
            }else {
                return '<a class="btn btn-success bt-sm" href="/controlinsumo/cambiar/estado/'.$controlinsumo->id.'/1">Activar</a>';
            }
        })
        //utilizamos rawcolumns para representar el contenido html
        ->rawcolumns(['cambiar'])
        ->make(true);
    }
}

