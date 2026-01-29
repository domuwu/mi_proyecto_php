<?php
require_once __DIR__ . "/../config/conexion.php";
class Usuario{
    public static function obtenerTodos(){
        $conn = Conexion::conectar();
        $sql = "SELECT id, nombre, email FROM usuarios";
        $res = $conn->query($sql);

        $usuarios = [];
        while($fila = $res -> fetch_assoc()){
            $usuarios[] = $fila;
        }
        return $usuarios;
    }
    public static function obtenerPorId($id){
        $conn = Conexion::conectar();
        $id = (int) $id;

        $sql = "SELECT id, nombre, email FROM usuarios WHERE id = $id LIMIT 1";
        $res = $conn->query($sql);
        return $res->fetch_assoc(); //retorna null si no existe
    }
    public static function crear($usuario, $correo, $clave){
        $conn = Conexion::conectar();
        $usuario = $conn->real_escape_string($usuario);
        $correo = $conn->real_escape_string($correo);
        $clave = $conn->real_escape_string($clave);

        $sql = "INSERT INTO usuarios (nombre, email, clave) VALUES ('$usuario', '$correo', '$clave')";
        return $conn->query($sql);
    }
    public static function actualizar ($id, $usuario, $correo){
        $conn = Conexion :: conectar();
        $id = (int) $id;
        $usuario = $conn->real_escape_string($usuario);
        $correo = $conn->real_escape_string($correo);

        $sql = "UPDATE usuarios SET nombre = '$usuario', email = '$correo' WHERE id = $id";
        return $conn->query($sql);
    }
    public static function eliminar ($id){
        $conn = Conexion::conectar();
        $id = (int) $id;

        $sql = "DELETE FROM usuarios WHERE id = $id";
        return $conn->query($sql);
    }
}