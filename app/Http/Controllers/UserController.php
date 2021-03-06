<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users= User::paginate(4);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view(view:'users.create');
    }

    public function store(Request $request)

    {
        $request->validate(rules: [
            'name'=>'required|min:3|max:10',
            'apellido'=>'required|min:3|max:10',
            'username'=>'required',
            'tipodocumento'=>'required|min:2|max:5',
            'ndocumento'=>'required',
            'telefono'=>'required',
            'celular'=>'required',
            'direccion'=>'required|min:3|max:40',
            'fechanacimiento'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $user = User::create($request->only('name', 'apellido', 'username', 'tipodocumento', 'ndocumento', 'telefono', 'celular', 'direccion', 'fechanacimiento', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
        // $user = User::findOrfail($id);
        // add($user);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //$user=User::findOrFail($id);
        $data=$request->only( 'name', 'apellido', 'username', 'tipodocumento', 'ndocumento', 'telefono', 'celular', 'direccion', 'fechanacimiento', 'email', 'estado');
        $password=$request->input(key: 'password');
        if($password)
            $data['password']=bcrypt($password);

        // if (trim($request->password)=='')
        // {
        //     $data=$request->except(keys: 'password');
        // }
        // else
        // {
        //     $data=$request->all();
        //     $data['password']=bcrypt($request->password);
        // }
        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
    }

}
