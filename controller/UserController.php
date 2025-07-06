<?php
class UsuarioController {
    
    public function index() {
        echo "Listado de usuarios";
    }

    public function crear() {
        echo "Formulario para crear usuario";
    }

    public function guardar($datos) {
        // lógica para guardar usuario
        echo "Usuario guardado: " . $datos['nombre'];
    }
}