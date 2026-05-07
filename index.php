<?php
include 'conexion.php';
$resultado = $conn->query("SELECT * FROM articulos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Industrial</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="overlay"></div>

<div class="contenedor">

    <h1>⚙️ Inventario Industrial ⚙️</h1>

    <div class="formulario">
        <form action="guardar.php" method="POST">

            <input type="text" name="nombre" placeholder="Nombre del artículo" required>

            <input type="text" name="marca" placeholder="Marca" required>

            <input type="number" name="cantidad" placeholder="Cantidad" required>

            <input type="text" name="bodega" placeholder="Bodega" required>

            <button type="submit">Guardar Artículo</button>

        </form>
    </div>

    <div class="tabla-contenedor">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Bodega</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php while($fila = $resultado->fetch_assoc()) { ?>

                    <tr>
                        <td><?= $fila['id'] ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['marca'] ?></td>
                        <td><?= $fila['cantidad'] ?></td>
                        <td><?= $fila['bodega'] ?></td>

                        <td>
                            <a class="btn-editar" href="obtener.php?id=<?= $fila['id'] ?>">
                                Editar
                            </a>

                            <a class="btn-eliminar" href="eliminar.php?id=<?= $fila['id'] ?>">
                                Eliminar
                            </a>
                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>