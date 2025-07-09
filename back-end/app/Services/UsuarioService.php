<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioService
{
    public function obtenerTodos()
    {
        return User::all();
    }

     public function guardar(array $datos)
    {
        return User::create([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
        ]);
    }

}
