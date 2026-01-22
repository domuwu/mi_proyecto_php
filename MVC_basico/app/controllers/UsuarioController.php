<?php

require_once __DIR__ . "/../models/usuario.php";
/*El controlador NO imprime HTML.
Si hay echo aquí, está mal.
El controlador solo recibe peticiones, pide datos al modelo y los pasa a la vista.*/

class UsuarioController {
    //Pedir los datos al modelo y mostrarlos en la vista
    public function listar(){
    //1. Pedir los datos al modelo
    $usuarios = Usuario::obtenerTodos();
    //2. Devolver los datos (por ahora)
    return $usuarios;
    }
}