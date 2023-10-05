<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div>
    <form action="read_habitacion.php" method="GET">
        <div>
            <label for="buscar">buscar por tipo de habitacion</label>
            <input type="text" name="buscar" >
            <input type="submit" value="Buscar">
        </div>
        </form>
    </div>
    <br><br>
    <?php include('conexion.php');

    $orden=isset($_GET['orden'])?$_GET['orden']:'id_tipo_habitacion';

   // $sql = "SELECT h.id,nro,bano_privado,espacio,precio,t.descripcion as tipo_habitacion FROM habitacion h
    //LEFT JOIN tipo_habitacion t on h.id_tipo_habitacion=t.id ";

    $sql = "SELECT h.id,nro,bano_privado,espacio,precio,t.descripcion as tipo_habitacion,f.fotografia as fotografia FROM habitacion h
    LEFT JOIN tipo_habitacion t on h.id_tipo_habitacion = t.id
    LEFT JOIN fotos_habitacion f on h.id = f.id_habitacion ";

    if (isset($_GET['buscar']))
    {
    $buscar=$_GET['buscar'];
    $sql .=" WHERE descripcion like '%$buscar%' ";
    }
    $sql.="order by $orden";
    //echo $sql;

    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table border=1>
            <tr>
                <th>fotografia</th>
                <th >nro</th>
                <th >bano_privado</th>
                <th >espacio</th>
                <th >precio</th>
                <th >tipo de habitacion</th>
                <th >Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><img src="images/<?php echo $row['fotografia'];  ?>" width="100px" ></td>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['tipo_habitacion']; ?></td>
                    <td><a href="form_update_habitacion.php?id=<?php echo $row['id'];?>">Editar</a>
                        <a href="delete_habitacion.php?id=<?php echo $row['id'];?>">Eliminar</a>
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
<a href="formulario_habitacion.php">Insertar habitacion</a>
<br>
<a href="formulario_fotos_habitacion.php">Insertar fotografia</a>
</html>