<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id, nombre FROM carrera";
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table class="center">
            <tr>
                <th><h1>Carreras</h1></th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><a href="form_update_carrera.php?id=<?php echo $row['id'];?>">Editar</a>
                        <a href="delete_carrera.php?id=<?php echo $row['id'];?>">Eliminar</a>
                </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
    <br>
    <a class="center" href="formulario.php">Añadir carrera</a>




</body>

</html>