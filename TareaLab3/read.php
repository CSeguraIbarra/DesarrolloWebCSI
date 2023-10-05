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
    $sql = "SELECT id, descripcion,numero_camas FROM tipo_habitacion";
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table border=1 >
            <tr>
                <th><h1>Descripcion</h1></th>
                <th><h1>Numero de camas</h1></th>
                <th><h1>operaciones</h1></th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['numero_camas']; ?></td>
                    <td><a href="form_update_tipo_habitacion.php?id=<?php echo $row['id'];?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id'];?>">Eliminar</a>
                </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
    <a href="formulario_tipo_habitacion.php">Insertar tipo de habitacion</a>
</body>

</html>