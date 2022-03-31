<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique(User::class),],
            'tipodocumento' => ['required', 'string', 'max:255'],
            'ndocumento' => ['required', 'string', 'max:255', Rule::unique(User::class),],
            'telefono' => ['required', 'string', 'max:255'],
            'celular' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'direccion' => ['required', 'string', 'max:255'],
            'fechanacimiento' => ['required', 'date', 'max:255'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'apellido' => $input['apellido'],
            'username' => $input['username'],
            'tipodocumento' => $input['tipodocumento'],
            'ndocumento' => $input['ndocumento'],
            'telefono' => $input['telefono'],
            'celular' => $input['celular'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'direccion' => $input['direccion'],
            'fechanacimiento' => $input['fechanacimiento'],
        ]);
    }
}
