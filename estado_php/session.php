<?php
/*
👉 Este archivo INICIA una sesión
📌 El navegador NO guarda el nombre
📌 Solo guarda un ID de sesión
*/
?>

<?php
session_start();

//Guardar dato en sesión
$_SESSION["usuario"] = "Joel";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sesión</title>
</head>

<body>
    <h1>SESIÓN INICIADA</h1>
    <p>Se ha guardado el usuario en la sesión</p>

    <a href="ver_session.php">Ver sesión</a>

</body>

</html>