<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>

    <h1>Listado de Usuarios</h1>
    <p><a href="index.php?url=usuarios/crearForm">Crear Usuario</a></p>
    <table border="1" cellpading ="6">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>

        <?php foreach($usuario as $u): ?>
        <tr>
            <td><?= htmlspecialchars($u["id"]) ?></td>
            <td><?= htmlspecialchars($u["usuario"]) ?></td>
            <td><?= htmlspecialchars($u["email"]) ?></td>
            <td>
                <a href="index.php?url=usuarios/editarForm&id=<?= $u["id"] ?>">Editar</a>
                <a href="index.php?url=usuarios/eliminar&id=<?= $u["id"] ?>" 
                onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>