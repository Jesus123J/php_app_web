<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

  public function store(Request $request)
    {
        if ($request->isJson()) {
            $usuario = $this->usuarioService->guardar($request->json()->all());
            return response()->json([
                'mensaje' => 'Usuario creado exitosamente',
                'usuario' => $usuario
            ], 201);
        }

        return response()->json([
            'error' => 'No es JSON'
        ], 400);
    }

    public function index()
    {
        $usuarios = $this->usuarioService->obtenerTodos();
        return response()->json($usuarios);
    }
}
