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
}

