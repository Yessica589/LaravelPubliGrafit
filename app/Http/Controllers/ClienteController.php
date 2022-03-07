<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes= Cliente::paginate(4);
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view(view:'cliente.create');
    }

    public function store(Request $request)

    {
        Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente creado correctamente');
    }

    public function show(Cliente $cliente)
    {
        // $user = User::findOrfail($id);
        // add($user);
        return view('cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        //$user=User::findOrFail($id);
        $data=$request->only( 'nombrecompleto', 'telefono', 'celular', 'email', 'direccion', 'estado');
        $cliente->update($data);
        return redirect()->route('cliente.index')->with('success', 'Cliente actualizado correctamente');
    }
}
