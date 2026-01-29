<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form method="POST" action="index.php?url=usuarios.crear">

        <label>Usuario:</label><br>
        <input name="usuario" required><br><br>

        <label>Email:</label><br>
        <input name="email" type="email" required><br><br> 

        <label>Clave:</label><br>
        <input name="clave" type="password" required><br><br>

        <button type="submit">Guardar</button>

        <p><a href="index.php?url=usuarios/listar">Volver al listado</a></p>

    </form>
</body>
</html>