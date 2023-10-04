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

    $sql = "SELECT h.id,nro,bano_privado,espacio,precio,t.descripcion,numero_camas as tipo_habitacion FROM habitacion h
    LEFT JOIN tipo_habitacion t on h.id_tipo_habitacion=t.id ";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table >
            <tr>
                <th >nro</th>
                <th >bano_privado</th>
                <th >espacio</th>
                <th >precio</th>
                <th >tipo de habitacion</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['tipo_habitacion']; ?></td>
                    <td><a href="update_habitacion.php?id=<?php echo $row['id'];?>">Editar</a>
                        <a href="delete_habitaciones.php?id=<?php echo $row['id'];?>">Eliminar</a>
                </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
</body>

</html>