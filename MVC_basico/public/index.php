<?php //aqui se ponen los controladores front controladores principales
require_once __DIR__ . "/../app/controllers/UsuarioController.php";

//Obtener la acción de la URL(router simple por GET)
$url = $_GET["url"] ?? "usuarios/listar";

switch ($url) {
    case "usuarios/listar":
        $controller = new UsuarioController();
        $usuarios = $controller->listar();
        //Cargar la vista
         require __DIR__ . "/../app/views/usuarios/listar.php";
         break;
    default:
        http_response_code(404);
        echo "Página no encontrada";;
        break;
}