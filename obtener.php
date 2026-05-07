<?php
include 'conexion.php';

$id = $_GET['id'];

$resultado = $conn->query("SELECT * FROM articulos WHERE id=$id");

$articulo = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="overlay"></div>

<div class="contenedor editar-box">

    <h1>✏️ Editar Artículo</h1>

    <form action="actualizar.php" method="POST">

        <input type="hidden" name="id" value="<?= $articulo['id'] ?>">

        <input type="text" name="nombre"
        value="<?= $articulo['nombre'] ?>" required>

        <input type="text" name="marca"
        value="<?= $articulo['marca'] ?>" required>

        <input type="number" name="cantidad"
        value="<?= $articulo['cantidad'] ?>" required>

        <input type="text" name="bodega"
        value="<?= $articulo['bodega'] ?>" required>

        <button type="submit">Actualizar</button>

    </form>

    <br>

    <a class="volver" href="index.php">⬅ Volver</a>

</div>

</body>
</html>