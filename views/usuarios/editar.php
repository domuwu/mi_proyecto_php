<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>

    <?php if (!$usuario):?>
        <p>Usuario no encontrado.</p>
        <p><a href="index.php?url=usuarios/listar">Volver al listado</a></p>
    <?php else: ?>
        <form method="POST" action="index.php?url=usuarios/actualizar">

            <input type="hidden" name="id" value="<?= htmlspecialchars($usuario["id"]) ?>">

            <label>Usuario:</label><br>
            <input type="text" name="usuario" value="<?= htmlspecialchars($usuario["usuario"]) ?>" required><br><br>

            <label>Email:</label><br>
            <input name="email" type="email" value="<?= htmlspecialchars($usuario["email"]) ?>" required><br><br> 

            <button type="submit">Actualizar</button>
        </form>

            <p><a href="index.php?url=usuarios/listar">Volver al listado</a></p>
            
    <?php endif; ?>
</body>
</html>