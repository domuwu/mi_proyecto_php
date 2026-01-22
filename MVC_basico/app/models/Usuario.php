<?php  
require_once __DIR__ . "/../../../config/conexion.php";

class Usuario {
//Obtener todos los usuarios
    public static function obtenerTodos() {
        $conn = Conexion::conectar();
        $sql = "SELECT id, usuario, correo FROM usuarios";
        $resultado = $conn->query($sql);
        $usuarios = [];

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }

        /* Datos simulados para pruebas sin BD
        [
            ['id' => 1, 'usuario' => 'juan', 'correo' => 'juan@example.com'],
            ['id' => 2, 'usuario' => 'maria', 'correo' => 'maria@example.com'],
            ['id' => 3, 'usuario' => 'pedro', 'correo' => 'pedro@example.com']
        ];
        */

        return $usuarios;
    }
}